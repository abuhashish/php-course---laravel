@extends('layout')
@section('main')
@include('books/errors')
<form method="post" action="{{url("books/update/$book->id")}}">
@csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text"name="name" class="form-control" value="{{$book->name}}">
    </div>
    <div class="form-group">
      <label>description</label>
      <input type="text" name="desc"class="form-control" value="{{$book->desc}}">
    </div>
   <!-- <div class="form-group">
      <input type="file" class="custom-file-input">
      <label>choose file</label>
    </div> -->
    <button type="submit" class="btn btn-primary">update</button>
</form>
@endsection
