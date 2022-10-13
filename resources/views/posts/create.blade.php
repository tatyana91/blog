<form method="post" action="{{ route('posts.store') }}">
    @csrf
    <div>
        Title--: <input type="text" name="title" value="{{ old('title') }}"/>
        @error('title') {{ $message }} @enderror
    </div>
    <div>
        Slug--: <input type="text" name="slug" value="{{ old('slug') }}"/>
        @error('slug') {{ $message }} @enderror
    </div>
    <div>
        Content: <textarea name="content">{{ old('content') }}</textarea>
        @error('content') {{ $message }} @enderror
    </div>
    <button>Send</button>
</form>
