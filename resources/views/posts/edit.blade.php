<x-layouts.base title="Edit post">
    <h1 class="h2">Edit post</h1>
    <form method="post" action="{{ route('posts.update', $post->id) }}">
        @method('PUT')
        @include('posts.form-fields')
        <button class="btn btn-primary">Send</button>
    </form>
</x-layouts.base>
