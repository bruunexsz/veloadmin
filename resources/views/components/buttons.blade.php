@extends('layouts.app')
@section('title', 'Buttons')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Buttons</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Components</li><li>Buttons</li></ul></div></div>

<div class="row g-3">
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Default Buttons</h5></div><div class="va-card-body d-flex flex-wrap gap-2">
        <button class="btn btn-primary">Primary</button><button class="btn btn-secondary">Secondary</button><button class="btn btn-success">Success</button><button class="btn btn-danger">Danger</button><button class="btn btn-warning">Warning</button><button class="btn btn-info">Info</button><button class="btn btn-light">Light</button><button class="btn btn-dark">Dark</button>
    </div></div></div>

    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Outline Buttons</h5></div><div class="va-card-body d-flex flex-wrap gap-2">
        <button class="btn btn-outline-primary">Primary</button><button class="btn btn-outline-secondary">Secondary</button><button class="btn btn-outline-success">Success</button><button class="btn btn-outline-danger">Danger</button><button class="btn btn-outline-warning">Warning</button><button class="btn btn-outline-info">Info</button>
    </div></div></div>

    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Button Sizes</h5></div><div class="va-card-body d-flex flex-wrap align-items-center gap-2">
        <button class="btn btn-primary btn-lg">Large</button><button class="btn btn-primary">Default</button><button class="btn btn-primary btn-sm">Small</button>
    </div></div></div>

    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Icon Buttons</h5></div><div class="va-card-body d-flex flex-wrap gap-2">
        <button class="btn btn-primary"><i class="bi bi-download me-1"></i>Download</button><button class="btn btn-success"><i class="bi bi-check-lg me-1"></i>Approve</button><button class="btn btn-danger"><i class="bi bi-trash me-1"></i>Delete</button><button class="btn btn-outline-primary"><i class="bi bi-share"></i></button>
    </div></div></div>

    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Button Groups</h5></div><div class="va-card-body">
        <div class="btn-group mb-2"><button class="btn btn-primary">Left</button><button class="btn btn-primary">Center</button><button class="btn btn-primary">Right</button></div><br>
        <div class="btn-group"><button class="btn btn-outline-primary active">Day</button><button class="btn btn-outline-primary">Week</button><button class="btn btn-outline-primary">Month</button></div>
    </div></div></div>

    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Loading Buttons</h5></div><div class="va-card-body d-flex flex-wrap gap-2">
        <button class="btn btn-primary" disabled><span class="spinner-border spinner-border-sm me-1"></span>Loading...</button>
        <button class="btn btn-outline-success" disabled><span class="spinner-grow spinner-grow-sm me-1"></span>Processing</button>
    </div></div></div>
</div>
@endsection
