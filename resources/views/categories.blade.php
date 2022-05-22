@extends('layouts.main')
@section('container')
    <h1 class="mb-3">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="{{ url('/posts?category=' . $category->slug) }}">
                        <div class="card" style="width: 18rem;">
                            <img src="https://random.imagecdn.app/300/200" class="card-img-top"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-white fw-bold text-center bg-dark p-3 flex-fill">
                                    {{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
