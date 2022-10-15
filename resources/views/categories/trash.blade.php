<x-layouts.base title="Category trash">
    <h1 class="h2">Trash</h1>
    <a href="{{ route('categories.index') }}">Categories</a>
    <hr>
    @foreach($categories as $category)
        <h2>{{ $category->title }}</h2>
        <em>{{ $category->created_at }}</em><br>
        <form method="post" action="{{ route('categories.restore', $category->id) }}">
            @csrf
            @method('PUT')
            <button class="btn btn-primary">restore</button>
        </form>
        <hr>
    @endforeach
</x-layouts.base>
