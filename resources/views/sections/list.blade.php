@extends('layouts.layout')
 
@section('content')
 

@foreach ($sections as $section)
    <div class ="row mb-3">
        <div class="col-2"><img  class="w-100" src="{{$section->image}}"></div>
        <div class="col-10">
            <h3>{{$section->title}}</h3>
            <a class="btn btn-default" href="{{ route('sections.index', ['slug'=>$section->slug])}}">Подробнее</a>
        </div>
    </div>
@endforeach 
@endsection