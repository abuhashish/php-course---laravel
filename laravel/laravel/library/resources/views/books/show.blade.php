@extends('layout')

@section('main')
<h1> ALL BOOKS</h1>
<h2>{{$book->name}}</h2>
<p>{{$book->desc}}</p>
<p>{{$book->created_at}}</p>
<a href="{{url('books')}}">all books</a>
@endsection
