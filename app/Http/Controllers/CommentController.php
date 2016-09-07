<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Auth;
use Request;
use App\Comment;

class CommentController extends Controller
{
    public function comment()
    {
        if(Auth::check())
        {
            $id_user = Auth::user()->id;
            $name_user = Auth::user()->name;
        }
        else
        {
            $id_user = 1;
            $name_user = Request::get('name');
        }
        if(Request::ajax())
        {
            $comment = new Comment();
            $comment->id_nguoi_dung = $id_user;
            $comment->id_san_pham = Request::get('id');
            $comment->ten_nguoi_dung = $name_user;
            $comment->noi_dung = Request::get('content');
            $comment->save();

            $lastCommentID = $comment->id;
            $newComment = Comment::where('id',$lastCommentID)->select('ten_nguoi_dung','noi_dung','created_at')->get()->first();
            $name = $newComment->ten_nguoi_dung;
            $content = $newComment->noi_dung;
            $time = date('h:i a',strtotime($newComment->created_at));
            $date = date('d-m-Y',strtotime($newComment->created_at));
            return response()->json(['ok' => 'ok', 'name' => $name, 'content' => $content, 'time' => $time, 'date' => $date]);
        }

    }
}
