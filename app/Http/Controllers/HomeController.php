<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;

class HomeController extends Controller
{
    //
    public function index()
    {
        $listProduct = ProductsModel::paginate(2);
       
        return view('Home.index', compact('listProduct'))->with('i',(request()->input('page',1)-1)*5);
    } 
}
