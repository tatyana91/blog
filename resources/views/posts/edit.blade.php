<form method="post" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <div>
        Title--: <input type="text" name="title" value="{{ old('title') ?? $post->title }}"/>
        @error('title') {{ $message }} @enderror
    </div>
    <div>
        Slug--: <input type="text" name="slug" value="{{ old('slug') ?? $post->slug }}"/>
        @error('slug') {{ $message }} @enderror
    </div>
    <div>
        Content: <textarea name="content">{{ old('content') ?? $post->content }}</textarea>
        @error('content') {{ $message }} @enderror
    </div>
    <button>Send</button>
</form>
