<?php

namespace App\Http\Controllers;

use App\Models\PostsModel;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    
    
    public function index(){
        $list=PostsModel::all();
        return view('Post.indexPosts', ['list' => $list]);
    }
    public function admin(){
        $list=PostsModel::all();
        return view('Post.adminPosts', ['list' => $list]);
    }
}
    
