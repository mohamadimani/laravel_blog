@extends('layouts.master')

@section('header')
<title>نمایش پست  </title>
@endsection

@section('content')

 
  <h3>{{$post->title}}</h3>
  <hr>
  <img src="{{$post->image}}">
  <br>
  <p>{{$post->content}}</p>
 
@endsection