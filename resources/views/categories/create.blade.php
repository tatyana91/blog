<x-layouts.base title="Create category">
    <h1 class="h2">Create category</h1>
    <form method="post" action="{{ route('categories.store') }}">
        @include('categories.form-fields')
        <button class="btn btn-primary">Send</button>
    </form>
</x-layouts.base>
