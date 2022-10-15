<x-layouts.base title="Create post">
    <h1 class="h2">Create post</h1>
    <x-form method="post" action="{{ route('posts.store') }}">
        @include('posts.form-fields')
        <x-form-submit />
    </x-form>
</x-layouts.base>
