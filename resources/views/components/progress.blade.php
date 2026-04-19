@extends('layouts.app')
@section('title', 'Progress & Spinners')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Progress & Spinners</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Components</li><li>Progress</li></ul></div></div>
<div class="row g-3">
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Progress Bars</h5></div><div class="va-card-body">
        <div class="mb-3"><small class="text-muted">25%</small><div class="progress" style="height:8px"><div class="progress-bar" style="width:25%"></div></div></div>
        <div class="mb-3"><small class="text-muted">50%</small><div class="progress" style="height:8px"><div class="progress-bar bg-success" style="width:50%"></div></div></div>
        <div class="mb-3"><small class="text-muted">75%</small><div class="progress" style="height:8px"><div class="progress-bar bg-warning" style="width:75%"></div></div></div>
        <div><small class="text-muted">100%</small><div class="progress" style="height:8px"><div class="progress-bar bg-danger" style="width:100%"></div></div></div>
    </div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Striped & Animated</h5></div><div class="va-card-body">
        <div class="mb-3"><div class="progress" style="height:10px"><div class="progress-bar progress-bar-striped" style="width:40%"></div></div></div>
        <div class="mb-3"><div class="progress" style="height:10px"><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:60%"></div></div></div>
        <div><div class="progress" style="height:10px"><div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width:80%"></div></div></div>
    </div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Border Spinners</h5></div><div class="va-card-body d-flex flex-wrap gap-3">
        <div class="spinner-border text-primary"></div><div class="spinner-border text-success"></div><div class="spinner-border text-danger"></div><div class="spinner-border text-warning"></div><div class="spinner-border text-info"></div>
    </div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Growing Spinners</h5></div><div class="va-card-body d-flex flex-wrap gap-3">
        <div class="spinner-grow text-primary"></div><div class="spinner-grow text-success"></div><div class="spinner-grow text-danger"></div><div class="spinner-grow text-warning"></div><div class="spinner-grow text-info"></div>
    </div></div></div>
</div>
@endsection
