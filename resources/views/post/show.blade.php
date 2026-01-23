@php
// بنشوف لو فيه كومنت جاي عشان يتعدل، لو مفيش بنخلي الحقول فاضية
$isEdit = isset($editComment);
$action = $isEdit ? "/comment/{$editComment->id}" : "/comment";
$contentValue = $isEdit ? $editComment->content : old('comment');
@endphp
<x-layout>
    <h1>{{ $data->title }}</h1>
    <p>{{ $data->body }}</p>
    <p>
        @foreach ($data->comments as $comment )
    <p>{{ $comment->author }} : {{ $comment->content }}</p>
    <a href="?edit_id={{ $comment->id }}">Edit</a>

    <form method="POST" action="/comment/{{ $comment->id }}" onsubmit="return confirm('are u want')">
        @csrf
        @method('DELETE')
        <button type="submit" name="id">delete</button>
    </form>
    @endforeach
    </p>
    <form method="POST" action="{{ $action }}">
        @csrf
        @if($isEdit) @method('PUT') @endif
        <input type="hidden" name="post_id" value="{{ $data->id }}">
        <input type="text"
            name="comment"
            value="{{ $contentValue }}"
            placeholder="enter your comment"
            class="bg-amber-100">
        <button type="submit">{{ $isEdit ? 'Update' : 'Enter' }}</button>
        @if($isEdit)
        <a href="{{ url()->current() }}">Cancel</a>
        @endif
    </form>
</x-layout>
