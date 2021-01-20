@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <h1>Posts</h1>

    @foreach($posts as $post)

        <div class="card">
            <div class="card-body">
                
            　　<p class="card-text"><img src="{{ asset('public/storage') }}/{{ $post->id }}/{{ $post->image }}"  width="350" height="220"></p>
                <h5 class="card-title">タイトル：{{ $post->title }}</h5>
                <p class="card-text">詳細：{{ $post->content }}</p>
                <p class="card-text">価格：{{ $post->price }}円</p>
                <p class="card-text">場所：{{ $post->place }}</p>

                <div class="d-flex" style="height: 36.4px;">
                    <a href="/sample/posts/{{ $post->id }}" class="btn btn-outline-primary">表示</a>
                    <a href="/sample/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">編集</a>
                    <form action="/sample/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-outline-danger">削除</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <a href="/sample/posts/create">新規登録</a> 
@endsection