@extends('layouts.main')
@section('container')
    <h1 class="mb-4 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="{{ url('/posts') }}" method="get" autocomplete="off">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="search posts"
                        value="{{ request('search') }}">
                    <button class="btn btn-success" type="submit">search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://random.imagecdn.app/1200/300" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="{{ url('/posts/' . $posts[0]->slug) }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <small class="text-muted">Creted by <a href="{{ url('/authors/' . $posts[0]->author->username) }}"
                        class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}</small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="{{ url('/posts/' . $posts[0]->slug) }}" class="btn btn-primary">Read More</a>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute bg-dark px-2 py-1 rounded"><a
                                    href="{{ url('/categories/' . $post->category->slug) }}"
                                    class="text-decoration-none text-white">{{ $post->category->name }}</a>
                            </div>
                            <img src="https://random.imagecdn.app/400/300/" class="card-img-top"
                                alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ url('/posts/' . $post->slug) }}"
                                        class="text-decoration-none">{{ $post->title }}</a></h5>
                                <small class="text-muted">Creted by <a
                                        href="{{ url('/authors/' . $post->author->username) }}"
                                        class="text-decoration-none">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}</small>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="{{ url('/posts/' . $post->slug) }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found</p>
    @endif
@endsection