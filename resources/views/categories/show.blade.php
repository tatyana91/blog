<h1>{{ $category->title }}</h1>
<a href="{{ route('categories.index') }}">Back</a>
<hr>
<div>{{ $category->description }}</div>
<em>{{ $category->created_at }}</em>
