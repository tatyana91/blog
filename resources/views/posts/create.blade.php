<x-layouts.base title="Create post">
    <h1 class="h2">Create post</h1>
    <form class="form" method="post" action="{{ route('posts.store') }}">
        @include('posts.form-fields')
        <button class="btn btn-primary">Send</button>
    </form>
</x-layouts.base>
