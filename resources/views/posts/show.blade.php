@if (session('message'))
        {{ session('message') }}
    @endif

    {{ $post->title }}
    {{ $post->content }} 

    <a href="/sample/posts/{{ $post->id }}/edit">Edit</a>