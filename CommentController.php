<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Comment;
use \App\Models\User;

class CommentController extends Controller
{
    public function comment_article(Request $request,$id)
    {
        $data=User::find($id);
        $comment=Comment::create($request->all());
        return $comment;
    }
}
