@extends('layouts.layout')
 
@section('content')
 
 
 <div class="row">

    @foreach($posts as $post)
    <div class="col-lg-4">
        <div class="single-bottom mb-35">
            <div class="trend-bottom-img mb-30">
                <img src="{{$post->image}}" alt="">
            </div>
            <div class="trend-bottom-cap">
                <span class="color1">Lifestyple</span>
<h4><a href="{{route("post.detail",["post_slug"=>$post->slug,"section_slug"=>$section->slug])}}">{{$post->title}}</a></h4>
            </div>
        </div>
        </div>

    @endforeach
</div>
@endsection