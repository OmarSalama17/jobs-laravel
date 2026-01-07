@foreach ($data as $comment )
<h1>{{ $comment->content }}</h1>
<p> author comment : {{ $comment->author }}</p>
<div>{{ $comment->post->title }} , author post : {{ $comment->post->author }}</div>
@endforeach
