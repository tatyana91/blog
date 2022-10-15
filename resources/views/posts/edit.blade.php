<x-layouts.base title="Edit post">
    <h1 class="h2">Edit post</h1>
    <form method="post" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <x-controls.select name="category_id"
                               label="Category"
                               value="{{ old('category_id') ?? $post->category_id }}"
                               :options="$categories"/>
        </div>
        <div class="mb-3">
            <x-controls.input name="title" label="Title" value="{{ old('title') ?? $post->title }}"/>
        </div>
        <div class="mb-3">
            <x-controls.input name="slug" label="Slug" value="{{ old('slug') ?? $post->slug }}"/>
        </div>
        <div class="mb-3">
            <x-controls.textarea name="content" label="Content" value="{{ old('content') ?? $post->content }}"/>
        </div>
        <button class="btn btn-primary">Send</button>
    </form>
</x-layouts.base>
