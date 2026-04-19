@extends('layouts.auth')
@section('title', 'Lock Screen')
@section('content')
<div class="va-auth-wrapper">
    <div class="va-auth-card text-center">
        <img src="https://ui-avatars.com/api/?name=John+Doe&background=6366f1&color=fff&size=80" class="rounded-circle mb-3" width="80" height="80">
        <h5 class="mb-1">John Doe</h5>
        <p class="text-muted mb-4" style="font-size:.8125rem">Enter your password to unlock</p>
        <form>
            <div class="mb-4"><input type="password" class="form-control text-center" placeholder="Enter password"></div>
            <a href="{{ url('/') }}" class="btn btn-primary w-100 mb-3">Unlock</a>
        </form>
        <p class="mb-0" style="font-size:.8125rem">Not John? <a href="{{ url('/auth/login') }}">Sign in as different user</a></p>
    </div>
</div>
@endsection
