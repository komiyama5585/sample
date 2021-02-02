@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')
    @if (session('message'))
        {{ session('message') }}
    @endif

    <div class="card">
        <div class="card-body">
            
            <p class="card-text"><img src="{{ asset('public/storage') }}/{{ $post->id }}/{{ $post->image }}"  width="350" height="220"></p>
                <h5 class="card-title">タイトル：{{ $post->title }}</h5>
                <p class="card-text">詳細：{{ $post->content }}</p>
                <p class="card-text">価格：{{ $post->price }}円</p>
                <p class="card-text">場所：{{ $post->place }}</p>

            <div class="d-flex" style="height: 36.4px;">
                <button class="btn btn-outline-primary">表示</button>
                <a href="/sample/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">編集</a>
                
                <form action="/posts/{{ $post->id }}/{{route('carts.store')}}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">削除</button>
                </form>
            </div>
        </div>
    </div>

    <a href="/sample/posts/{{ $post->id }}/edit">編集</a> | 
    <a href="/sample/posts">戻る</a>
  
@endsection 
S