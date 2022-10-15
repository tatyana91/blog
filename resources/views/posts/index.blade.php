<x-layouts.base title="Blog">
    <h1 class="h2">Blog</h1>
    <a href="{{ route('posts.create') }}">Add post</a>
    <a href="{{ route('posts.trash') }}">Trash</a>
    <hr>
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <div>Category: {{ $post->category->title ?? '-' }}</div>
        <em>{{ $post->created_at }}</em><br>
        <div class="btnsBlock">
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">show</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">edit</a>
            <form method="post" action="{{ route('posts.destroy', $post->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">delete</button>
            </form>
        </div>
        <hr>
    @endforeach
</x-layouts.base>
