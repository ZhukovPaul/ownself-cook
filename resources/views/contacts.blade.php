@extends('layouts.layout')
 
@section('content')
 <h1>Please, fill below form.</h1>
 <small>If you can, please write down more information into below textarea</small>
<form method="POST" action="{{route("sendEmail")}}">
    @csrf
    <div class="form-row">
     
      <div class="form-group col-md-6">
        <label for="inputName">Name</label>
        <input type="text" name="name" autocomplete=off class="form-control" id="inputName" placeholder="Your name">
      </div>
      <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" name="email" autocomplete=off class="form-control" id="inputEmail4" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" autocomplete=off name="address" id="inputAddress" placeholder="1234 Main St">
    </div>
     
    <div class="form-group">
        <label for="moreInformation">More information</label>
        <textarea class="form-control" name="content" autocomplete=off id="moreInformation"></textarea>
    </div> 
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>


@endsection