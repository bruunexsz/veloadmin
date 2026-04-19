@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<div class="va-auth-wrapper">
    <div class="va-auth-card">
        <div class="logo-text mb-2">Velo<span>Admin</span></div>
        <p class="text-center text-muted mb-4">Sign in to your account</p>
        <form>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="name@example.com" value="admin@veloadmin.com">
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between"><label class="form-label">Password</label><a href="{{ url('/auth/forgot-password') }}" style="font-size:.8125rem">Forgot password?</a></div>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Enter password" value="password">
                    <button class="btn btn-outline-secondary" type="button" onclick="let i=this.previousElementSibling;i.type=i.type==='password'?'text':'password'"><i class="bi bi-eye"></i></button>
                </div>
            </div>
            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="remember" checked>
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <a href="{{ url('/') }}" class="btn btn-primary w-100 mb-3">Sign In</a>
            <div class="text-center mb-3"><span class="text-muted" style="font-size:.8125rem">or sign in with</span></div>
            <div class="d-flex gap-2">
                <button type="button" class="btn btn-outline-secondary flex-fill"><i class="bi bi-google me-1"></i>Google</button>
                <button type="button" class="btn btn-outline-secondary flex-fill"><i class="bi bi-github me-1"></i>GitHub</button>
            </div>
        </form>
        <p class="text-center mt-4 mb-0" style="font-size:.8125rem">Don't have an account? <a href="{{ url('/auth/register') }}">Sign up</a></p>
    </div>
</div>
@endsection
