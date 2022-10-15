<x-layouts.base title="{{ $category->title }}">
    <h1 class="h2">{{ $category->title }}</h1>
    <a href="{{ route('categories.index') }}">Back</a>
    <hr>
    <div>{{ $category->description }}</div>
    <em>{{ $category->created_at }}</em>

    <div>Posts:</div>
    @forelse($category->posts as $post)
        <div>{{ $post->title }}</div>
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
    @empty
        <div>This category has no posts</div>
    @endforelse
</x-layouts.base>
