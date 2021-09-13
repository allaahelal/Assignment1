<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['post','user_id'];

    public function post_comments()
    {
        return $this->hasMany(Comment::Class);
    }

    public function post_users()
    {
        return $this->belongsTo(User::Class);
    }
}
