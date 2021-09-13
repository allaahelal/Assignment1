<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;

class UserController extends Controller
{
    public function create_article(Request $request)
    {
        $data=Article::create($request->all());
        return $data;
    }

    public function delete_article($id)
    {
        $data=Article::find($id);
        $data->delete();
    }

    public function update_article(Request $request,$id)
    {
        $data=Article::find($id);
        $data->update($request->all('post'));
    }

}
