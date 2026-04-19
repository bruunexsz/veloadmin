@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Frequently Asked Questions</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>FAQ</li></ul></div></div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="mb-4"><input type="text" class="form-control" placeholder="Search questions..." id="faqSearch" oninput="let v=this.value.toLowerCase();document.querySelectorAll('.accordion-item').forEach(i=>{i.style.display=i.textContent.toLowerCase().includes(v)?'':'none'})"></div>

        <h5 class="mb-3"><i class="bi bi-question-circle text-primary me-2"></i>General</h5>
        <div class="accordion mb-4" id="faqGeneral">
            <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#g1">What is VeloAdmin?</button></h2><div id="g1" class="accordion-collapse collapse show" data-bs-parent="#faqGeneral"><div class="accordion-body text-muted">VeloAdmin is a premium admin dashboard template built with Laravel 12 and Bootstrap 5. It provides a comprehensive set of UI components, charts, tables, forms, and pre-built pages to accelerate your admin panel development.</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#g2">What technologies does it use?</button></h2><div id="g2" class="accordion-collapse collapse" data-bs-parent="#faqGeneral"><div class="accordion-body text-muted">VeloAdmin is built with Laravel 12, Bootstrap 5.3, ApexCharts, DataTables, Leaflet.js, Dropzone.js, and uses Vite for asset compilation.</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#g3">Is it responsive?</button></h2><div id="g3" class="accordion-collapse collapse" data-bs-parent="#faqGeneral"><div class="accordion-body text-muted">Yes! VeloAdmin is fully responsive and works beautifully on desktops, tablets, and mobile devices.</div></div></div>
        </div>

        <h5 class="mb-3"><i class="bi bi-credit-card text-primary me-2"></i>Licensing</h5>
        <div class="accordion mb-4" id="faqLicense">
            <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#l1">What license do I need?</button></h2><div id="l1" class="accordion-collapse collapse" data-bs-parent="#faqLicense"><div class="accordion-body text-muted">For a single project, the Regular License is sufficient. If you plan to charge end-users for access, you'll need the Extended License.</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#l2">Do I get free updates?</button></h2><div id="l2" class="accordion-collapse collapse" data-bs-parent="#faqLicense"><div class="accordion-body text-muted">Yes, all licenses include free lifetime updates. You'll receive notifications whenever a new version is released.</div></div></div>
        </div>

        <h5 class="mb-3"><i class="bi bi-headset text-primary me-2"></i>Support</h5>
        <div class="accordion" id="faqSupport">
            <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s1">How do I get support?</button></h2><div id="s1" class="accordion-collapse collapse" data-bs-parent="#faqSupport"><div class="accordion-body text-muted">You can reach our support team through the comments section on ThemeForest or via our dedicated support email.</div></div></div>
            <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s2">What is the response time?</button></h2><div id="s2" class="accordion-collapse collapse" data-bs-parent="#faqSupport"><div class="accordion-body text-muted">We typically respond within 24-48 business hours. Priority support customers receive responses within 12 hours.</div></div></div>
        </div>
    </div>
</div>
@endsection
