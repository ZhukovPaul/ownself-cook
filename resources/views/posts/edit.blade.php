@extends('layouts.layout')
 

@section('script')
<script src="https://cdn.tiny.cloud/1/jd6j8qy0t51ea07txeh9az0z6n8reyia4er235igz1g8gxlj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
<script>
    tinymce.init({
        selector: '#description'
    });             
</script>
  
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/posts/{{$post->slug}}"  >
    @csrf
    @method("PUT")
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" value="{{$post->title}}" name="title" >
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="text" class="form-control" id="image" name="image" value="{{$post->image}}" >
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" value="{{$post->slug}}" >
  </div>
 
  <div class="mb-3">
    <label for="description" class="form-label">Post description</label>
    <textarea class="form-control" name="description" id="description" rows="3">{{$post->description}}</textarea>
  </div>
  <button class="btn btn-default" type="submit" value="Send" >Update</button>
  
</form>

@endsection