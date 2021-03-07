<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Models\Post;
// use App\Http\Controllers\Api;


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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get("posts",function(){
//     return Post::get();

    // $post = Post::create([
    //     'title' => 'title_zzz',
    //     'slug' => 'slug_zzz',
    //     'likes' => 1000,
    //     'content' => 'content_zzz'
    // ]);
    // return $post;
// });

Route::group([
    "namespace" => "App\Http\Controllers\Api",
    "prefix" => "v1"
],function(){
    Route::apiResource("posts","PostController");
});
