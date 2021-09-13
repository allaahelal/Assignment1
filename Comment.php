<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment','article_id'];

    public function post_comments()
    {
        return $this->belongsTo(Article::Class);
    }
}
