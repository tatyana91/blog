<form method="post" action="{{ route('categories.store') }}">
    @csrf
    <div>Title--: <input type="text" name="title" /></div>
    <div>Slug--: <input type="text" name="slug" /></div>
    <div>Description--: <textarea name="description"></textarea></div>
    <button>Send</button>
</form>
