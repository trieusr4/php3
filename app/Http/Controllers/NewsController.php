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
        $list = NewsModel::search() -> paginate(5);
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
            'image' => ['required', 'image', 'max:2048']
        ]);
        $input = $request->all();
        $id = \Auth::id();
        $new = new NewsModel;
        if ($request->file('image')) {
            $input['image'] = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        }
        $new->title = $input['title'];
        $new->des = $input['description'];
        $new->image = $input['image'];
        $new->users_id = $id;
        $new->save();

        return redirect("/news");
    }

    public function edit($id)
    {
        $new = NewsModel::find($id);
        return view("News.edit", compact('new'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'max:2048']
        ]);
        $new = NewsModel::find($id);
        $input = $request->all();
        $id = \Auth::id();
        if ($request->file('image')) {
            $input['image'] = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        }
        $new->title = $input['title'];
        $new->des = $input['description'];
        $new->image = $input['image'];
        $new->users_id = $id;
        $new->save();

        return redirect("/news");
    }

    public function destroy($id): RedirectResponse
    {
        $post = NewsModel::find($id);
        $post->delete();
        return redirect("/news");
    }
}
