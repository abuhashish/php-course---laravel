@extends('layout')
@section('title')
HomePage
@endsection
@section('main')
<h1> ALL BOOKS</h1>
@foreach($allbooks as $book)
<h2>
   <a href="{{url("books/show/$book->id")}}"> {{$book->name}} </a>

</h2>
<p>{{$book->desc}}</p>
<p>{{$book->created_at}}</p>
<h3>{{$book->cat->name}}</h3>
<a href="{{url("books/edit/$book->id")}}"> edit </a>
<a href="{{url("books/delete/$book->id")}}"> delete </a>
@endforeach
{{$allbooks->links()}}
@endsection
