<h1>Blog</h1>
<a href="{{ route('posts.create') }}">Add post</a>
<hr>
@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <em>{{ $post->created_at }}</em><br>
    <a href="{{ route('posts.show', $post->id) }}">more...</a>
    <a href="{{ route('posts.edit', $post->id) }}">edit...</a>
    <hr>
@endforeach
