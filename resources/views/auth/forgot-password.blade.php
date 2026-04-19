@extends('layouts.auth')
@section('title', 'Forgot Password')
@section('content')
<div class="va-auth-wrapper">
    <div class="va-auth-card">
        <div class="logo-text mb-2">Velo<span>Admin</span></div>
        <div class="text-center mb-4">
            <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3 mb-3"><i class="bi bi-envelope-paper text-primary" style="font-size:2rem"></i></div>
            <p class="text-muted">Enter your email and we'll send you instructions to reset your password</p>
        </div>
        <form>
            <div class="mb-4"><label class="form-label">Email address</label><input type="email" class="form-control" placeholder="name@example.com"></div>
            <button type="button" class="btn btn-primary w-100 mb-3">Send Reset Link</button>
        </form>
        <p class="text-center mb-0" style="font-size:.8125rem"><a href="{{ url('/auth/login') }}"><i class="bi bi-arrow-left me-1"></i>Back to Sign in</a></p>
    </div>
</div>
@endsection
