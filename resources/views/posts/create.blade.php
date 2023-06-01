@extends('layouts.master')

@section('header')
<title>{{ (isset($post) and $post->id) ? 'ویرایش پست' :  'ایجاد پست' }}</title>
@endsection

@section('content')
<form action="{{ (isset($post) and $post->id) ? url('/posts/'.$post->id) :  url('/posts') }}" method="post">

    @if (isset($post))      
    <input type="hidden" name="_method" value="PUT" />
    @endif

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <fieldset>
        <legend>{{ (isset($post) and $post->id) ? 'ویرایش پست' :  'ایجاد پست' }} </legend>
        <div class="col-md-8">
            <div class="mb-3 col-md-6">
                <label for=" " class="form-label">عنوان : </label>
                <input type="text" id=" " name="title" class="form-control" placeholder="عنوان" value="{{ (isset($post) and $post->title) ? $post->title : old('title') }}">
            </div>
            <div class="mb-3 col-md-6">
                <label for="disabledSelect" class="form-label">محتوا : </label>
                <textarea id="disabledSelect" name="content" class="form-control" placeholder="محتوا ...">{{ (isset($post) and $post->content) ? $post->content : old('content') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
    </fieldset>
</form>
@endsection