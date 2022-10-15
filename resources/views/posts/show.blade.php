<x-layouts.base title="{{ $post->title }}">
    <h1 class="h2">{{ $post->title }}</h1>
    <div>Category: {{ $post->category->title ?? '-' }}</div>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
    <hr>
    <em>{{ $post->created_at }}</em>
    <div>{{ $post->content }}</div>
</x-layouts.base>
