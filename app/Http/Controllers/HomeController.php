<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use App\Models\ProductsModel;

class HomeController extends Controller
{
    //
    public function index()
    {
        $listProduct = ProductsModel::search() -> paginate(4);
        return view('Home.index', compact('listProduct'));
    } 
    public function new(){
        $listNew= NewsModel::search()->paginate(2);
        return view('Home.new-font', compact('listNew'));
    }
}
