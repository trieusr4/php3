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
        $cmt -> post_id = $request -> post_id;
        $cmt -> parent_id = $request -> parent_id;
        $cmt -> content = $request -> content;
        $cmt -> user_id = $id;
        $cmt->save();
        return back();
    }
}
