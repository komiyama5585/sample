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
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">コンテンツ</label>
        <textarea class="form-control" name="content">{{ old('content') == '' ? $post->content : old('content') }}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">投稿する</button>
</form>

<a href="/sample/posts/{{ $post->id }}">表示</a> ｜
<a href="/sample/posts">戻る</a>
@endsection