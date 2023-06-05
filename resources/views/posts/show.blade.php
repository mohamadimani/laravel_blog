@extends('layouts.master')

@section('header')
<title>نمایش پست  </title>
@endsection

@section('content')

 
  <h3>{{$post->title}}</h3>
  <hr>
  <img style="width: 480px;height:400px;" src="{{ asset($post->image) }}">
  <br>
  <p>{{$post->content}}</p>
 <br>
 <hr style="margin-bottom: 1px ">
 <span>{{dateToJalali($post->created_at)->format('Y/m/d H:i:s') }}</span>
 <hr style="margin-top: 1px ">
@endsection