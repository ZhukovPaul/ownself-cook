<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = App\Models\Post::take(9)->get();
    //dd($posts);
    return view('index',[
        'posts' => $posts
    ]);
});

 


Route::get('/about', function () {
   // $posts = App\Models\Post::take(9)->get();
    
    //dd($posts);
     return view('posts.post');
   
})->name("about");

Route::get('/contacts', function () {
   // $posts = App\Models\Post::take(9)->get();
    
    //dd($posts);
     return view('page');
   
})->name("contacts");
 
Route::get('/posts', function () {
    $posts = App\Models\Post::take(9)->get();
    return $posts;
 
})->name("posts");
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'] );
Route::get('/posts/{slug}', [App\Http\Controllers\PostController::class, 'show'] );
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'] )->name("create_post");
Route::get('/posts/{slug}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::put('/posts/{slug}', [App\Http\Controllers\PostController::class, 'update']);
/*
Route::get('/posts/{slug}/edit', function ($slug) {
    $post = App\Models\Post::where( 'slug' , $slug )->first();
    
    if(!$post) abort(404);
    
    return view('posts.edit',[
        'post' => $post
    ]);
});*/
/*
Route::put('/posts/{id}', function ($id) {
    return $id;
});*/