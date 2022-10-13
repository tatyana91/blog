<form method="post" action="{{ route('categories.update', $category->id) }}">
    @csrf
    <div>Title--: <input type="text" name="title" value="{{ $category->title }}"/></div>
    <div>Slug--: <input type="text" name="slug" value="{{ $category->slug }}"/></div>
    <div>Description--: <textarea name="description">{{ $category->description }}</textarea></div>
    <button>Send</button>
</form>
