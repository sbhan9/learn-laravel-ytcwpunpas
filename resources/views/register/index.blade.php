@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-registration mt-5">
                <form autocomplete="off">
                    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" id="name" name="name" placeholder="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">already account? <a href="{{ url('/login') }}">login
                        now</a></small>
            </main>
        </div>
    </div>
@endsection
