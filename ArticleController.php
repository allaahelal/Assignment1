<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;
use \App\Models\User;

class ArticleController extends Controller
{
    public function view_article($id)
    {
       $data=User::find($id);
       $display= Article::where('User_id',$id)->get('post');
       return "$display";
    }
}
