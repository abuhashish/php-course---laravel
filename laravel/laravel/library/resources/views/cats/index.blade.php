@extends('layout')
@section('title')
HomePage
@endsection
@section('main')
<h1> ALL cats</h1>
@foreach($allcats as $cat)
<h2>
   <a href="{{url("cats/show/$cat->id")}}"> {{$cat->name}} </a>

</h2>
<p>{{$cat->desc}}</p>
<p>{{$cat->created_at}}</p>
<a href="{{url("cats/edit/$cat->id")}}"> edit </a>
<a href="{{url("cats/delete/$cat->id")}}"> delete </a>
@endforeach
{{$allcats->links()}}
@endsection
