<h1>Blog</h1>
<a href="{{ route('posts.create') }}">Add post</a>
<a href="{{ route('posts.trash') }}">Trash</a>
<hr>
@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <em>{{ $post->created_at }}</em><br>
    <a href="{{ route('posts.show', $post->id) }}">more...</a>
    <a href="{{ route('posts.edit', $post->id) }}">edit...</a>
    <form method="post" action="{{ route('posts.destroy', $post->id) }}">
        @csrf
        @method('DELETE')
        <button>delete</button>
    </form>
    <hr>
@endforeach
