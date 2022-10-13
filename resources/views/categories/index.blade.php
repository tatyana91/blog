<h1>Categories</h1>
<a href="{{ route('categories.create') }}">Add category</a>
<a href="{{ route('categories.trash') }}">Trash</a>
<hr>
@foreach($categories as $category)
    <h2>{{ $category->title }}</h2>
    <em>{{ $category->created_at }}</em><br>
    <a href="{{ route('categories.show', $category->id) }}">more...</a>
    <a href="{{ route('categories.edit', $category->id) }}">edit...</a>
    <form method="post" action="{{ route('categories.destroy', $category->id) }}">
        @csrf
        @method('DELETE')
        <button>delete</button>
    </form>
    <hr>
@endforeach
