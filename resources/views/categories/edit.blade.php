<x-layouts.base title="Edit category">
    <h1 class="h2">Edit category</h1>
    <form method="post" action="{{ route('categories.update', $category->id) }}">
        @csrf
        <div class="mb-3">
            <x-controls.input name="title" label="Title" value="{{ $category->title }}"/>
        </div>
        <div class="mb-3">
            <x-controls.input name="slug" label="Slug" value="{{ $category->slug }}"/>
        </div>
        <div class="mb-3">
            <x-controls.textarea name="description" label="Description" value="{{ $category->description }}"/>
        </div>
        <button class="btn btn-primary">Send</button>
    </form>
</x-layouts.base>
