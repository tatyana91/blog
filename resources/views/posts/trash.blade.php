<h1>Trash</h1>
<a href="{{ route('posts.index') }}">Posts</a>
<hr>
@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <em>{{ $post->created_at }}</em><br>
    <form method="post" action="{{ route('posts.restore', $post->id) }}">
        @csrf
        @method('PUT')
        <button>restore</button>
    </form>
    <hr>
@endforeach
