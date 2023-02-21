@extends('layouts.main')

@section('title', 'All Posts')

@section('content')

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card border-dark">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">By {{ $post->author }}</h6>
                            <p class="card-text">{{ Str::limit($post->postText, 100) }}</p>
                            <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
