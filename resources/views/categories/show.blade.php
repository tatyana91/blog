<x-layouts.base title="{{ $category->title }}">
    <h1 class="h2">{{ $category->title }}</h1>
    <a href="{{ route('categories.index') }}">Back</a>
    <hr>
    <div>{{ $category->description }}</div>
    <em>{{ $category->created_at }}</em>
</x-layouts.base>
