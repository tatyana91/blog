<x-layouts.base title="Edit category">
    <h1 class="h2">Edit category</h1>
    <form method="post" action="{{ route('categories.update', $category->id) }}">
        @method('PUT')
        @include('categories.form-fields')
        <button class="btn btn-primary">Send</button>
    </form>
</x-layouts.base>
