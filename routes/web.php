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

Route::post('/contacts', [App\Http\Controllers\FeedBackContoller::class, 'sendEmail'] )->name("sendEmail");
Route::get('/contacts', function () {
     return view('contacts');
})->name("contacts");


Route::prefix('sections')->group(function () {
 
    Route::get('/{slug}', [App\Http\Controllers\SectionController::class, 'index'])->name("sections.index");
    Route::get('/', [App\Http\Controllers\SectionController::class, 'list'])->name("sections");
});

Route::prefix('posts')->group(function () {
    Route::get('/', function () {
        $posts = App\Models\Post::take(9)->get();
        return $posts;
    })->name("posts");
    
    Route::get('/create', [App\Http\Controllers\PostController::class, 'create'] );
    Route::get('/{slug}/edit', [App\Http\Controllers\PostController::class, 'edit']);
    Route::get('/{section_slug}/{post_slug}', [App\Http\Controllers\PostController::class, 'show'] )->name("post.detail");
    
    Route::post('', [App\Http\Controllers\PostController::class, 'store'] )->name("create_post");
    Route::put('/{slug}', [App\Http\Controllers\PostController::class, 'update']);
    
});

 