@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h2 class="mb-4">Login</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">User ID / Phone number / Account number</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter user id / Phone number / Account number" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <span class="ms-4 text-muted">(If you want to login to existing account, use username:abinesh, password:admin)</span>
                </form>
                <div class="mt-2 text-center">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('whoami') }}" class="btn btn-link">Forgot Account Number?</a>
                        <a href="{{ route('findme') }}" class="btn btn-link">Forgot Password?</a>
                    </div>
                    <div class="mt-3">
                        <span>Don't have a savings account? <br><a href="{{ route('register') }}">Open a Savings A/C here</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
