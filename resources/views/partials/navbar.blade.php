<nav class="navbar navbar-expand-lg navbar-dark bg-success p-3 shadow">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Sbhan Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $page === 'home' ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page === 'about' ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page === 'posts' ? 'active' : '' }}" href="{{ url('/posts') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page === 'categories' ? 'active' : '' }}"
                        href="{{ url('/categories') }}">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ url('/login') }}" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>
                        Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
