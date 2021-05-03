@extends('layout')
@section('main')
<form method="post" action="{{url('register')}}" enctype="multipart/form-data">
@csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text"name="name" class="form-control">
    </div>
    <div class="form-group">
      <label>email</label>
      <input type="text" name="email"class="form-control">
    </div>
    <div class="form-group">
        <label>password</label>
        <input type="text" name="password"class="form-control">
      </div>
      <div class="form-group">
        <label>confirm-password</label>
        <input type="text" name="password_confirmation"class="form-control">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
