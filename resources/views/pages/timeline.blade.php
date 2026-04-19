@extends('layouts.app')
@section('title', 'Timeline')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Timeline</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Timeline</li></ul></div></div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="va-card">
            <div class="va-card-body">
                <div class="va-timeline">
                    <div class="va-timeline-item">
                        <div class="d-flex justify-content-between"><span class="fw-semibold">Project Launch</span><small class="text-muted">Apr 18, 2026</small></div>
                        <p class="text-muted mt-1 mb-0">Successfully launched VeloAdmin v1.0 on ThemeForest marketplace with 40+ pages and full documentation.</p>
                    </div>
                    <div class="va-timeline-item">
                        <div class="d-flex justify-content-between"><span class="fw-semibold">Beta Testing Complete</span><small class="text-muted">Apr 10, 2026</small></div>
                        <p class="text-muted mt-1 mb-0">Completed beta testing phase with 15 testers. All critical bugs resolved and performance optimized.</p>
                    </div>
                    <div class="va-timeline-item">
                        <div class="d-flex justify-content-between"><span class="fw-semibold">Dark Mode Implementation</span><small class="text-muted">Mar 28, 2026</small></div>
                        <p class="text-muted mt-1 mb-0">Added full dark mode support with CSS variables system and localStorage persistence.</p>
                    </div>
                    <div class="va-timeline-item">
                        <div class="d-flex justify-content-between"><span class="fw-semibold">Dashboard Design Approved</span><small class="text-muted">Mar 15, 2026</small></div>
                        <p class="text-muted mt-1 mb-2">Three dashboard variants (Sales, eCommerce, Analytics) approved by the design team.</p>
                        <img src="https://ui-avatars.com/api/?name=Dashboard&background=6366f1&color=fff&size=200&chars=3" class="rounded" width="120" alt="Dashboard preview">
                    </div>
                    <div class="va-timeline-item">
                        <div class="d-flex justify-content-between"><span class="fw-semibold">Project Kickoff</span><small class="text-muted">Feb 20, 2026</small></div>
                        <p class="text-muted mt-1 mb-0">Started development of VeloAdmin template. Set up Laravel project, configured build tools, and created component library.</p>
                    </div>
                    <div class="va-timeline-item">
                        <div class="d-flex justify-content-between"><span class="fw-semibold">Market Research</span><small class="text-muted">Feb 10, 2026</small></div>
                        <p class="text-muted mt-1 mb-0">Analyzed top-selling admin templates on ThemeForest. Identified key features and design patterns for competitive positioning.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
