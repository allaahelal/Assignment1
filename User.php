<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   protected $fillable = ['email','password'];

   public function posts()
   {
       return $this->hasMany(Article::class);
   }

   public function comments()
   {
       return $this->hasManyThrough(Comment::class);
   }
}
