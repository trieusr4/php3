<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ProductsModel;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Share;

class ProductsController extends Controller
{
    public function index()
    {
        $list = ProductsModel::search()->paginate(4);
        return view('Products.index', ['list' => $list]);
    }

    public function create()
    {

        $listCategory = CategoryModel::all();
        return view('Products.create', ['listCategory' => $listCategory]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required'],
            'acreage' => ['required'],
            'bedroom' => ['required', 'integer'],
            'status' => ['required', 'string'],
            'image' => ['required', 'image', 'max:2048'],
            'category' => ['required']
        ]);
        $input = $request->all();
        $id = Auth::id();
        $product = new ProductsModel;
        if ($request->file('image')) {
            $input['image'] = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        }
        $product->title = $input['title'];
        $product->name = $input['name'];
        $product->price = $input['price'];
        $product->acreage = $input['acreage'];
        $product->bedroom = $input['bedroom'];
        $product->status = $input['status'];
        $product->description = $input['description'];
        $product->img = $input['image'];
        $product->user_id = $id;
        $product->category_id = $input['category'];
        $product->save();

        return redirect("/products");
    }

    public function edit($id)
    {
        $product = ProductsModel::find($id);
        $listCategory = CategoryModel::all();
        return view("Products.edit", compact('product', 'listCategory'));
    }

    public function detailHome($id)
    {
        $product = ProductsModel::with('comments')->find($id);
        $shareButtons1 = Share::page(
            'http://127.0.0.1:8000/home/product-detail/' . $id
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();
        return view("Home.product-detail", compact('product', 'shareButtons1'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required'],
            'acreage' => ['required'],
            'bedroom' => ['required', 'integer'],
            'status' => ['required', 'string'],
            'image' => ['required', 'image', 'max:2048'],
            'category' => ['required']
        ]);
        $product = ProductsModel::find($id);
        $input = $request->all();
        $id = Auth::id();
        if ($request->file('image')) {
            $input['image'] = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        }
        $product->title = $input['title'];
        $product->name = $input['name'];
        $product->price = $input['price'];
        $product->acreage = $input['acreage'];
        $product->bedroom = $input['bedroom'];
        $product->status = $input['status'];
        $product->description = $input['description'];
        $product->img = $input['image'];
        $product->user_id = $id;
        $product->category_id = $input['category'];
        $product->save();

        return redirect("/products");
    }

    public function destroy($id)
    {
        $categoria = ProductsModel::find($id);
        $categoria->delete();
        return redirect("/products");
    }
}