@extends('layouts.main')
@section('container')
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="mb-5">
                    <h2>{{ $post->title }}</h2>
                    By. <a href="{{ url('/authors/' . $post->author->username) }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="{{ url('/categories/' . $post->category->slug) }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                    <img src="https://random.imagecdn.app/1200/400" class="mt-2 img-fluid"
                        alt="{{ $post->category->name }}">
                    <article class="my-3">
                        {!! $post->body !!}
                    </article>
                    <a href="{{ url('/posts') }}" class="d-block mt-3">back to posts</a>
                </article>
            </div>
        </div>
    </div>
@endsection
