<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;

class HomeController extends Controller
{
    //
    public function index()
    {
        $listProduct = ProductsModel::search() -> paginate(5);
        return view('Home.index', compact('listProduct'));
    } 
}
