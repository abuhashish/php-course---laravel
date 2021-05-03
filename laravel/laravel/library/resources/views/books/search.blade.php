@extends('layout')

@section('main')
<h1> ALL BOOKS</h1>
@foreach($books as $book)
<h2>{{$book->name}}</h2>
<p>{{$book->desc}}</p>
<p>{{$book->created_at}}</p>
@endforeach
@endsection
