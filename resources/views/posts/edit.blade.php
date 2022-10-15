<x-layouts.base title="Edit post">
    <h1 class="h2">Edit post</h1>
    <x-form method="put" action="{{ route('posts.update', $post->id) }}">
        @bind($post)
            @include('posts.form-fields')
        @endbind
        <x-form-submit />
    </x-form>
</x-layouts.base>
