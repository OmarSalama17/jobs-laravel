@foreach ($data as $post )
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
@foreach ($post->comments as $comment)
<li> {{ $comment->author }} : {{ $comment->content }}</li>
@endforeach
@endforeach
