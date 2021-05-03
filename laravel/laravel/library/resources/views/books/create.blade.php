@extends('layout')
@section('main')
@include('books/errors')
<form method="post" action="{{url('books/store')}}" enctype="multipart/form-data">
@csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text"name="name" class="form-control">
    </div>
    <div class="form-group">
      <label>description</label>
      <input type="text" name="desc"class="form-control">
    </div>
    <select class="form-control" name="cat_id">
        @foreach($cats as $cat)
        <option value="{{$cat->id}}">{{$cat->name}} </option>
        @endforeach
    </select>
  <div class="form-group" >
      <input type="file" name="img" class="custom-file-input">
      <label>choose file</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
