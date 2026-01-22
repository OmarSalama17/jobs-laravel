@foreach ($data as $post )
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
<a href="/post/{{$post->id}}/edit">go</a>
@foreach ($post->comments as $comment)
<li> {{ $comment->author }} : {{ $comment->content }}</li>
@endforeach
@endforeach
