@extends('layouts.app')
@section('title', 'Tabs & Accordions')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Tabs & Accordions</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Components</li><li>Tabs</li></ul></div></div>
<div class="row g-3">
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Default Tabs</h5></div><div class="va-card-body">
        <ul class="nav nav-tabs mb-3"><li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#t1">Home</a></li><li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#t2">Profile</a></li><li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#t3">Settings</a></li></ul>
        <div class="tab-content"><div class="tab-pane fade show active" id="t1"><p class="text-muted mb-0">Home tab content with important dashboard information.</p></div><div class="tab-pane fade" id="t2"><p class="text-muted mb-0">Profile settings and personal information.</p></div><div class="tab-pane fade" id="t3"><p class="text-muted mb-0">Application settings and preferences.</p></div></div>
    </div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Pill Tabs</h5></div><div class="va-card-body">
        <ul class="nav nav-pills mb-3"><li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#p1">Active</a></li><li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#p2">Inactive</a></li><li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#p3">Archived</a></li></ul>
        <div class="tab-content"><div class="tab-pane fade show active" id="p1"><p class="text-muted mb-0">Active items displayed here.</p></div><div class="tab-pane fade" id="p2"><p class="text-muted mb-0">Inactive items are listed here.</p></div><div class="tab-pane fade" id="p3"><p class="text-muted mb-0">Archived items for reference.</p></div></div>
    </div></div></div>
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Accordion</h5></div><div class="va-card-body">
        <div class="accordion" id="acc1">
            <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#a1">Accordion Item #1</button></h2><div id="a1" class="accordion-collapse collapse show" data-bs-parent="#acc1"><div class="accordion-body text-muted">Content for the first accordion item. This is a reusable component.</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a2">Accordion Item #2</button></h2><div id="a2" class="accordion-collapse collapse" data-bs-parent="#acc1"><div class="accordion-body text-muted">Content for the second accordion item with more details.</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a3">Accordion Item #3</button></h2><div id="a3" class="accordion-collapse collapse" data-bs-parent="#acc1"><div class="accordion-body text-muted">Content for the third accordion item.</div></div></div>
        </div>
    </div></div></div>
</div>
@endsection
