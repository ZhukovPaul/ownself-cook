@extends('layouts.layout')
 
@section('content')
<div class="container mb-3">
    <div class="float-right">
        <a class="btn m-0 p-3" href="/posts/{{$post->slug}}/edit">edit</a> <a class="btn p-3" href="">delete</a>
    </div>
 <h1>{{ $post->title}}</h2>
    <div class="row">
        <div class="col-3"><img class="w-100" src="{{$post->image}}"></div>
        <div class="col-9">
            <div class="my-3">{!! $post->description !!}</div>
        </div>
    </div>
     
    
</div>
@endsection