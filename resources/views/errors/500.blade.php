@extends('layouts.auth')
@section('title', '500 Server Error')
@section('content')
<div class="va-error-wrapper">
    <div class="va-error-code">500</div>
    <h3 class="mt-3 mb-2">Internal Server Error</h3>
    <p class="text-muted mb-4" style="max-width:400px">Something went wrong on our end. Please try again later.</p>
    <div class="d-flex gap-2"><a href="{{ url('/') }}" class="btn btn-primary"><i class="bi bi-house me-1"></i>Dashboard</a><button class="btn btn-outline-secondary" onclick="location.reload()"><i class="bi bi-arrow-clockwise me-1"></i>Retry</button></div>
</div>
@endsection
