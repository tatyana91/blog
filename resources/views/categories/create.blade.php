<x-layouts.base title="Create category">
    <h1 class="h2">Create category</h1>
    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        <div class="mb-3">
            <x-controls.input name="title" label="Title"/>
        </div>
        <div class="mb-3">
            <x-controls.input name="slug" label="Slug"/>
        </div>
        <div class="mb-3">
            <x-controls.textarea name="description" label="Description"/>
        </div>
        <button class="btn btn-primary">Send</button>
    </form>
</x-layouts.base>
