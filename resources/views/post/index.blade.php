@foreach ($data as $post )
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
<a href="/post/{{$post->id}}/edit">go</a>
<form method="POST" action="/post/{{ $post->id }}" onsubmit="return confirm('are you need to delete')">
    @csrf
    @method('DELETE')
    <button type="submit" class="p-4 bg-blue-800 text-white rounded-2xl">delete</button>
</form>
@foreach ($post->comments as $comment)
<li> {{ $comment->author }} : {{ $comment->content }}</li>
@endforeach
@endforeach
