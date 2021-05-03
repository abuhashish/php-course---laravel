@extends('layout')

@section('main')
<h1> ALL cats</h1>
<h2>{{$cat->name}}</h2>
@foreach($cat->books as $book)
<h3>{{$book->name}}</h3>
<h3>{{$book->desc}}</h3>
<h3>{{$book->img}}</h3>
@endforeach
{{-- @foreach($cat->books as $book)
<h3>{{book->name}}</h3>
@endforeach --}}
<p>{{$cat->created_at}}</p>
<a href="{{url('cats')}}">all cats</a>
@endsection
