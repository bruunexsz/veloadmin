@extends('layouts.app')
@section('title', 'Alerts')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Alerts</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Components</li><li>Alerts</li></ul></div></div>
<div class="row g-3">
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Default Alerts</h5></div><div class="va-card-body">
        <div class="alert alert-primary"><i class="bi bi-info-circle me-2"></i>A simple primary alert. Check it out!</div>
        <div class="alert alert-success"><i class="bi bi-check-circle me-2"></i>Operation completed successfully!</div>
        <div class="alert alert-danger"><i class="bi bi-x-circle me-2"></i>An error occurred. Please try again.</div>
        <div class="alert alert-warning"><i class="bi bi-exclamation-triangle me-2"></i>Warning! Please review your input.</div>
        <div class="alert alert-info mb-0"><i class="bi bi-lightbulb me-2"></i>Did you know? You can customize these alerts.</div>
    </div></div></div>
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Dismissible Alerts</h5></div><div class="va-card-body">
        <div class="alert alert-success alert-dismissible fade show"><i class="bi bi-check-circle me-2"></i><strong>Success!</strong> Your changes have been saved.<button class="btn-close" data-bs-dismiss="alert"></button></div>
        <div class="alert alert-danger alert-dismissible fade show"><i class="bi bi-x-circle me-2"></i><strong>Error!</strong> Something went wrong.<button class="btn-close" data-bs-dismiss="alert"></button></div>
        <div class="alert alert-warning alert-dismissible fade show mb-0"><i class="bi bi-exclamation-triangle me-2"></i><strong>Warning!</strong> This action is irreversible.<button class="btn-close" data-bs-dismiss="alert"></button></div>
    </div></div></div>
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Alert with Content</h5></div><div class="va-card-body">
        <div class="alert alert-primary mb-0"><h5 class="alert-heading"><i class="bi bi-info-circle me-2"></i>Heads up!</h5><p>This alert provides additional context with a heading, paragraph, and a horizontal rule.</p><hr><p class="mb-0">Use <code>.alert-heading</code> for styled headings inside alerts.</p></div>
    </div></div></div>
</div>
@endsection
