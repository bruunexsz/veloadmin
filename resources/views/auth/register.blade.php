@extends('layouts.auth')
@section('title', 'Register')
@section('content')
<div class="va-auth-wrapper">
    <div class="va-auth-card">
        <div class="logo-text mb-2">Velo<span>Admin</span></div>
        <p class="text-center text-muted mb-4">Create your account</p>
        <form>
            <div class="row g-3 mb-3">
                <div class="col-6"><label class="form-label">First Name</label><input type="text" class="form-control" placeholder="John"></div>
                <div class="col-6"><label class="form-label">Last Name</label><input type="text" class="form-control" placeholder="Doe"></div>
            </div>
            <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control" placeholder="name@example.com"></div>
            <div class="mb-3"><label class="form-label">Password</label><input type="password" class="form-control" placeholder="Min 8 characters"></div>
            <div class="mb-3"><label class="form-label">Confirm Password</label><input type="password" class="form-control" placeholder="Repeat password"></div>
            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="terms">
                <label class="form-check-label" for="terms" style="font-size:.8125rem">I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a></label>
            </div>
            <a href="{{ url('/') }}" class="btn btn-primary w-100 mb-3">Create Account</a>
            <div class="text-center mb-3"><span class="text-muted" style="font-size:.8125rem">or sign up with</span></div>
            <div class="d-flex gap-2">
                <button type="button" class="btn btn-outline-secondary flex-fill"><i class="bi bi-google me-1"></i>Google</button>
                <button type="button" class="btn btn-outline-secondary flex-fill"><i class="bi bi-github me-1"></i>GitHub</button>
            </div>
        </form>
        <p class="text-center mt-4 mb-0" style="font-size:.8125rem">Already have an account? <a href="{{ url('/auth/login') }}">Sign in</a></p>
    </div>
</div>
@endsection
