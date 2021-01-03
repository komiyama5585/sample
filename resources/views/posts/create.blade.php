@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

<h1>New Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form enctype="multipart/form-data" method="POST" action="/sample/posts">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">タイトル</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">詳細</label>
        <textarea class="form-control" name="content">{{old('content')}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">価格</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="price" value="{{old('price')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">取引場所</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="place" value="{{old('place')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">画像</label>
        <input type="file" class="form-control" aria-describedby="emailHelp" name="image" value="{{old('image')}}">
    </div>

    <button type="submit" class="btn btn-outline-primary">投稿する</button>
</form>

<a href="/sample/posts">戻る</a>

@endsection