<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CommentsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class CommentsController extends Controller
{
    //
    public function index()
    {
        $list = CommentsModel::search() -> paginate(4);
        return view('Comments.index', ['list' => $list]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $cmt = new CommentsModel;
        $id = Auth::id();
        $cmt->product_id = $request->product_id;
        $cmt->content = $request->content;
        $cmt->user_id = $id;
        $user = Auth::user();
        Mail::send('SendEmail.comment', compact('user', 'cmt'), function ($email) use ($user) {
            $email->subject('Thông báo bình luận');
            $email->to($user['email'], $user['name']);
        });
        $cmt->save();
        return back();
    }

    public function replies(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $cmt = new CommentsModel;
        $id = Auth::id();
        $cmt->product_id = $request->product_id;
        $cmt->parent_id = $request->parent_id;
        $cmt->content = $request->content;
        $cmt->user_id = $id;
        $user = Auth::user();
        Mail::send('SendEmail.comment', compact('user', 'cmt'), function ($email) use ($user) {
            $email->subject('Thông báo bình luận');
            $email->to($user['email'], $user['name']);
        });
        $cmt->save();
        return back();
        
    }
    public function destroy($id)
    {
        $comment = CommentsModel::find($id);
        $comment->delete();
        return redirect("/comments");
    }
}