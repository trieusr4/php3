<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductsModel;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductsController extends Controller
{
    public function index()
    {
        $list = ProductsModel::all();
        return view('Products.index', ['list' => $list]);
    }

    public function create()
    {
        return view('Products.create');
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
            'image' => ['required', 'image', 'max:2048']
        ]);
        $input = $request->all();
        $id = \Auth::id();
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
        $product->save();

        return redirect("/products");
    }

    public function edit($id)
    {
        $product = ProductsModel::find($id);
        return view("Products.edit", compact('product'));
    }

    public function detailHome($id)
    {
        $product = ProductsModel::find($id);
        return view("Home.product-detail", compact('product'));
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
            'image' => ['required', 'image', 'max:2048']
        ]);
        $product = ProductsModel::find($id);
        $input = $request->all();
        $id = \Auth::id();
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