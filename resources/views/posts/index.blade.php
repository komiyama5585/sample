<h1>Posts</h1> 

@foreach($posts as $post)
    <a href="/sample/posts/{{ $post->id }}">{{ $post->title }}</a>
    <a href="/sample/posts/{{ $post->id }}/edit">Edit</a>

    <form action="/sample/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Delete</button>
    </form>

@endforeach

<a href="/sample/posts/create">New Post</a>
