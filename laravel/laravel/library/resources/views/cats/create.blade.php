@extends('layout')
@section('main')
@include('cats/errors')
<form method="post" action="{{url('cats/store')}}">
@csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text"name="name" class="form-control">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
