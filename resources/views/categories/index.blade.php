<x-layouts.base title="Categories">
    <h1 class="h2">Categories</h1>
    <a href="{{ route('categories.create') }}">Add category</a>
    <a href="{{ route('categories.trash') }}">Trash</a>
    <hr>
    @foreach($categories as $category)
        <h2>{{ $category->title }}</h2>
        <em>{{ $category->created_at }}</em><br>
        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">more...</a>
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">edit...</a>
        <form method="post" action="{{ route('categories.destroy', $category->id) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">delete</button>
        </form>
        <hr>
    @endforeach
</x-layouts.base>
