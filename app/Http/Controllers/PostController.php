<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $post               = new \App\Models\Post();
        $post->title        = $request->get('title');
        $post->slug         = $request->get('slug');
        $post->image        = "";
        $post->description  = $request->get('description');
        $post->save(); 
        return \redirect('posts');
       // die('s');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = \App\Models\Post::where( 'slug' , $slug )->first();
        
        if(!$post) abort(404);

        return view('posts.post',[
            'post' => $post
        ]);
        
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = \App\Models\Post::where( 'slug' , $slug )->first();
        return view('posts.edit',[
            'post' => $post
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $slug)
    {
        //

        $request->validate([
            'title'         => 'required',
            'slug'          => 'required',
            'description'   => 'required',
        ]);

        $post = \App\Models\Post::where( 'slug' , $slug )->first();
        
        $post->title        = $request->get('title');
        $post->slug         = $request->get('slug');
        $post->image        = $request->get('image');
        $post->description  = $request->get('description');
        $post->save(); 
        return \redirect('/posts/'.$slug);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
