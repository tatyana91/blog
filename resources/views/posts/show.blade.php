<x-layouts.base title="{{ $post->title }}">
    <h1 class="h2">{{ $post->title }}</h1>
    <div>Category: {{ $post->category->title ?? '-' }}</div>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
    <hr>
    <em>{{ $post->created_at }}</em>
    <div>{{ $post->content }}</div>

    <h2 class="h4">Comments:</h2>
    @forelse($post->comments as $comment)
        <div class="alert alert-secondary">
            <div>{{ $comment->created_at }}</div>
            <div>{{ $comment->comment }}</div>
        </div>
    @empty
        <div class="alert alert-danger">
            No comments
        </div>
    @endforelse

    <h2 class="h4">Add comment:</h2>
    <x-form method="post" action="{{ route('comments.store', $post->id) }}">
        <div class="mb-3">
            <x-form-textarea name="comment" label="Comment" />
        </div>
        <x-form-submit />
    </x-form>
</x-layouts.base>

<!-- mytodo comments -->
