<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;

class HomeController extends Controller
{
    //
    public function index()
    {
        $listProduct = ProductsModel::all();
        return view('Home.index', ['listProduct' => $listProduct]);
    }
}
