<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CommentsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    //
    public function store(Request $request)
    {
    	$request->validate([
            'content'=>'required',
        ]);

        $cmt = new CommentsModel;
        $id = Auth::id();
        $cmt -> product_id = $request -> product_id;
        $cmt -> content = $request -> content;
        $cmt -> user_id = $id;
        $cmt->save();
        return back();
    }

    public function replies(Request $request)
    {
    	$request->validate([
            'content'=>'required',
        ]);

        $cmt = new CommentsModel;
        $id = Auth::id();
        $cmt -> product_id = $request -> product_id;
        $cmt -> parent_id = $request -> parent_id;
        $cmt -> content = $request -> content;
        $cmt -> user_id = $id;
        $cmt->save();
        return back();
    }
}
