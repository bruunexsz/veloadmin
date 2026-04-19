@extends('layouts.auth')
@section('title', '404 Not Found')
@section('content')
<div class="va-error-wrapper">
    <div class="va-error-code">404</div>
    <h3 class="mt-3 mb-2">Page Not Found</h3>
    <p class="text-muted mb-4" style="max-width:400px">The page you're looking for doesn't exist or has been moved.</p>
    <a href="{{ url('/') }}" class="btn btn-primary"><i class="bi bi-house me-1"></i>Back to Dashboard</a>
</div>
@endsection
