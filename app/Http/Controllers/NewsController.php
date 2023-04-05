<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class NewsController extends Controller
{
    public function index()
    {
        $list = NewsModel::all();
        return view('News.index', ['list' => $list]);
    }

    public function create()
    {
        return view('News.create');
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
        $product = new NewsModel;
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

        return redirect("/news");
    }

    public function edit($id)
    {
        $product = NewsModel::find($id);
        return view("News.edit", compact('product'));
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
        $product = NewsModel::find($id);
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

        return redirect("/news");
    }

    public function destroy($id): RedirectResponse
    {
        $post = NewsModel::find($id);
        $post->delete();
        return redirect("/news");
    }
}
