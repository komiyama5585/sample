@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')
    @if (session('message'))
        {{ session('message') }}
    @endif

    <div class="card">
        <div class="card-body">
            <form enctype="multipart/form-data" method="POST" action="/sample/carts">  
            {{ csrf_field() }}
                <p class="card-text"><img src="{{ asset('public/storage') }}/{{ $post->id }}/{{ $post->image }}"  width="350" height="220"></p>
                    <h5 class="card-title">タイトル：{{ $post->title }}</h5>
                    <p class="card-text">詳細：{{ $post->content }}</p>
                    <p class="card-text">価格：{{ $post->price }}円</p>
                    <p class="card-text">場所：{{ $post->place }}</p>
                    <p class="card-text"><input type="number" class="form-control" aria-describedby="emailHelp" name="count" value="{{old('count')}}">個</p>
                    <input type="hidden" name = "price" value = "{{ $post->price }}">
                <div class="d-flex" style="height: 36.4px;">
                    <button class="btn btn-outline-primary">カートに追加する</button>
                    <button class="btn btn-outline-primary">表示</button>
                    <a href="/sample/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">編集</a>
                    
                    
                </div>
            </form>    
        </div>
    </div>

    <a href="/sample/posts/{{ $post->id }}/edit">編集</a> | 
    <a href="/sample/posts">戻る</a>
  
@endsection 
S