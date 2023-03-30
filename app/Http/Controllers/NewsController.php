<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $list=NewsModel::all();
        return view('New.new', ['list' => $list]);
    }
}
