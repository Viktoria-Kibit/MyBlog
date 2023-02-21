@extends('layouts.main')

@section('title', $post->title)

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p class="text-muted">{{ $post->author }}</p>
    <p>{{ $post->postText }}</p>
    <a href="{{ route('post.index') }}" class="btn btn-secondary">Back to all posts</a>
</div>
@endsection
