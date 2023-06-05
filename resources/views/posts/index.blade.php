@extends('layouts.master')

@section('header')
<title>لیست پست ها</title>
@endsection

@section('content')
<br>
<div class="row">
  <div class="col-md-6">
    <form class="d-flex " role="sort" action="" method="get">
      <label for="sort " class="col-md-3">مرتب سازی بر اساس : </label>
      <select name="sort" style="margin-right: 5px;border-radius:5px;" id="sort" class="  col-md-3  ">
        <option value="">---</option>
        <option  @if (request()->sort == 'title'){{ 'selected'}}@endif value="title">عنوان</option>
        <option @if (request()->sort == 'content'){{ 'selected'}}@endif value="content">محتوا</option>
        <option @if (request()->sort == 'newest'){{ 'selected'}}@endif value="newest">جدید ترین</option>
        <option @if (request()->sort == 'oldest'){{ 'selected'}}@endif value="oldest">قدیمی ترین</option>
      </select>
      <button class="btn btn-outline-info " style="margin-right: 5px" type="submit">send</button>
    </form>
  </div>
</div>
<br>

<table class="table table-striped">
<tr>
  <td>ردیف</td>
  <td>عنوان</td>
  <td>محتوا</td>
  <td>عکس</td>
  <td>عملیات</td>
</tr>
@foreach ($posts as $key=> $post)
<tr>
 
  <td>{{$key +1}}</td>
  <td>{{$post->title}}</td>
  <td>{{shortText($post->content)}}</td>
  <td><img src="{{asset($post->image)}}" alt="" style="width: 80px;height:50px;"></td>
  <td>
    <form action="{{route('posts.destroy' , $post->id)}}" method="post" style="display:inline-block;">
      <input type="hidden" value="delete" name="_method">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <input type="submit" value="destroy" class="btn btn-danger" onclick="return confirm('حذف شود؟')">
    </form>
    <a href="{{route('posts.edit' , $post->id)}}" class="btn btn-info">edit</a>
    <a href="{{route('posts.show' , $post->id)}}" class="btn btn-success">show</a>
  </td>
</tr>
@endforeach
  </table>

  {{$posts->appends($_GET)->links()}}

@endsection