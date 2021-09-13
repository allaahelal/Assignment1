<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('create/article',[UserController::class,'create_article']);
Route::delete('delete/article/{id}',[UserController::class,'delete_article']);
Route::post('update/article/{id}',[UserController::class,'update_article']);
Route::get('view/post/{id}',[ArticleController::class,'view_article']);
Route::post('make/comment/{id}',[CommentController::class,'comment_article']);