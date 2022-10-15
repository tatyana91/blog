<x-layouts.base title="Create post">
    <h1 class="h2">Create post</h1>
    <form class="form" method="post" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <x-controls.select name="category_id"
                               label="Category"
                               value="{{ old('category_id') }}"
                               :options="$categories" />
        </div>
        <div class="mb-3">
            <x-controls.input name="title" label="Title" value="{{ old('title') }}"/>
        </div>
        <div class="mb-3">
            <x-controls.input name="slug" label="Slug" value="{{ old('title') }}"/>
        </div>
        <div class="mb-3">
            <x-controls.textarea name="content" label="Content" value="{{ old('content') }}"/>
        </div>
        <button class="btn btn-primary">Send</button>
    </form>
</x-layouts.base>
