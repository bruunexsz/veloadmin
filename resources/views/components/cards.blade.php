@extends('layouts.app')
@section('title', 'Cards')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Cards</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Components</li><li>Cards</li></ul></div></div>
<div class="row g-3">
    <div class="col-md-4"><div class="va-card"><div class="va-card-body"><h5 class="va-card-title">Basic Card</h5><p class="text-muted mt-2">A simple card with title and content. Cards provide a flexible container for content.</p><a href="#" class="btn btn-sm btn-primary">Learn More</a></div></div></div>
    <div class="col-md-4"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Card with Header</h5></div><div class="va-card-body"><p class="text-muted">This card has a separate header section with a title and body content below.</p></div></div></div>
    <div class="col-md-4"><div class="va-card text-center"><div class="va-card-body py-4"><div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3 mb-3"><i class="bi bi-lightning-charge text-primary" style="font-size:1.5rem"></i></div><h5>Feature Card</h5><p class="text-muted">Perfect for highlighting features or services with an icon.</p></div></div></div>
    <div class="col-md-6"><div class="va-card border-primary" style="border-left:4px solid var(--va-primary)"><div class="va-card-body"><h5 class="va-card-title">Accent Card</h5><p class="text-muted mb-0">A card with a colored left border for visual emphasis and categorization.</p></div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-body"><div class="d-flex align-items-center gap-3"><img src="https://ui-avatars.com/api/?name=Jane+S&size=48&background=6366f1&color=fff" class="rounded-circle" width="48"><div><h6 class="mb-0">Jane Smith</h6><small class="text-muted">Product Designer</small></div><button class="btn btn-sm btn-outline-primary ms-auto">Follow</button></div></div></div></div>
</div>
@endsection
