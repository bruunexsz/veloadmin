@extends('layouts.app')
@section('title', 'Badges')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Badges</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Components</li><li>Badges</li></ul></div></div>
<div class="row g-3">
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Default Badges</h5></div><div class="va-card-body d-flex flex-wrap gap-2">
        <span class="badge bg-primary">Primary</span><span class="badge bg-secondary">Secondary</span><span class="badge bg-success">Success</span><span class="badge bg-danger">Danger</span><span class="badge bg-warning text-dark">Warning</span><span class="badge bg-info">Info</span>
    </div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Pill Badges</h5></div><div class="va-card-body d-flex flex-wrap gap-2">
        <span class="badge rounded-pill bg-primary">Primary</span><span class="badge rounded-pill bg-secondary">Secondary</span><span class="badge rounded-pill bg-success">Success</span><span class="badge rounded-pill bg-danger">Danger</span>
    </div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Soft Badges</h5></div><div class="va-card-body d-flex flex-wrap gap-2">
        <span class="va-badge va-badge-primary">Primary</span><span class="va-badge va-badge-success">Success</span><span class="va-badge va-badge-danger">Danger</span><span class="va-badge va-badge-warning">Warning</span><span class="va-badge va-badge-info">Info</span>
    </div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Badges in Buttons</h5></div><div class="va-card-body d-flex flex-wrap gap-2">
        <button class="btn btn-primary">Notifications <span class="badge bg-light text-primary">4</span></button>
        <button class="btn btn-outline-danger">Errors <span class="badge bg-danger">9+</span></button>
    </div></div></div>
</div>
@endsection
