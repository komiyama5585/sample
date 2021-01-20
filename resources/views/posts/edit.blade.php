@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')
<h1>editing posts</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/sample/posts/{{ $post->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="exampleInputEmail1">タイトル</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('title') == '' ? $post->title : old('title') }}">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">詳細</label>
        <textarea class="form-control" name="content">{{ old('content') == '' ? $post->content : old('content') }}</textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">価格</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="price" value="{{ old('price') == '' ? $post->price : old('price') }}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">場所</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="place" value="{{ old('place') == '' ? $post->place : old('place') }}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">画像</label>
        <input type="file" class="form-control" aria-describedby="emailHelp" name="image" value="{{ old('image')== '' ? $post->image : old('image')}}">
    </div>

    <button type="submit" class="btn btn-outline-primary">修正</button>
</form>

<a href="/sample/posts/{{ $post->id }}">表示</a> ｜
<a href="/sample/posts">戻る</a>
@endsection