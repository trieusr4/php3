<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $list = CategoryModel::paginate(5);
        return view('Categories.index', ['list' => $list]);
    }

    public function create()
    {
        return view('Categories.create');
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $categoria = new CategoryModel;
        $categoria->name = $request->name;
        $categoria->save();

        return redirect("/categories");
    }

    public function edit($id)
    {
        $category = CategoryModel::find($id);
        return view("Categories.edit", compact('category'));
    }

    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $categoria = CategoryModel::find($id);
        $categoria->name = $request->name;
        $categoria->save();

        return redirect("/categories");
    }

    public function destroy($id)
    {
        $categoria = CategoryModel::find($id);
        $categoria->delete();
        return redirect("/categories");
    }
}