@extends('layout')
@section('main')
@include('cats/errors')
<form method="post" action="{{url("cats/update/$cat->id")}}">
@csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text"name="name" class="form-control" value="{{$cat->name}}">
    </div>

    <button type="submit" class="btn btn-primary">update</button>
</form>
@endsection
