@extends('layouts.app')
@section('title', 'Pricing')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Pricing Plans</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Pricing</li></ul></div></div>

<div class="text-center mb-4">
    <p class="text-muted">Choose the plan that fits your needs</p>
    <div class="btn-group"><button class="btn btn-primary btn-sm active" id="monthlyBtn" onclick="document.querySelectorAll('.yearly').forEach(e=>e.style.display='none');document.querySelectorAll('.monthly').forEach(e=>e.style.display='');this.classList.add('active');document.getElementById('yearlyBtn').classList.remove('active')">Monthly</button><button class="btn btn-outline-primary btn-sm" id="yearlyBtn" onclick="document.querySelectorAll('.monthly').forEach(e=>e.style.display='none');document.querySelectorAll('.yearly').forEach(e=>e.style.display='');this.classList.add('active');document.getElementById('monthlyBtn').classList.remove('active')">Yearly <span class='badge bg-success ms-1'>-20%</span></button></div>
</div>

<div class="row g-4 justify-content-center">
    <div class="col-lg-4">
        <div class="va-card text-center h-100">
            <div class="va-card-body py-5">
                <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3 mb-3"><i class="bi bi-lightning text-primary" style="font-size:1.5rem"></i></div>
                <h5>Starter</h5>
                <p class="text-muted">Perfect for individuals</p>
                <div class="mb-4"><span class="monthly"><h2 class="d-inline">$19</h2><span class="text-muted">/month</span></span><span class="yearly" style="display:none"><h2 class="d-inline">$182</h2><span class="text-muted">/year</span></span></div>
                <ul class="list-unstyled text-start mb-4" style="font-size:.875rem">
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>5 Projects</li>
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>10GB Storage</li>
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>Basic Analytics</li>
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>Email Support</li>
                    <li class="py-2 text-muted"><i class="bi bi-x-circle me-2"></i>Custom Domain</li>
                </ul>
                <button class="btn btn-outline-primary w-100">Get Started</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="va-card text-center h-100 border-primary" style="border-width:2px">
            <div class="va-card-body py-5">
                <span class="badge bg-primary mb-3">Most Popular</span>
                <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3 mb-3"><i class="bi bi-rocket-takeoff text-primary" style="font-size:1.5rem"></i></div>
                <h5>Professional</h5>
                <p class="text-muted">For growing teams</p>
                <div class="mb-4"><span class="monthly"><h2 class="d-inline">$49</h2><span class="text-muted">/month</span></span><span class="yearly" style="display:none"><h2 class="d-inline">$470</h2><span class="text-muted">/year</span></span></div>
                <ul class="list-unstyled text-start mb-4" style="font-size:.875rem">
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>Unlimited Projects</li>
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>100GB Storage</li>
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>Advanced Analytics</li>
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>Priority Support</li>
                    <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Custom Domain</li>
                </ul>
                <button class="btn btn-primary w-100">Get Started</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="va-card text-center h-100">
            <div class="va-card-body py-5">
                <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex p-3 mb-3"><i class="bi bi-building text-primary" style="font-size:1.5rem"></i></div>
                <h5>Enterprise</h5>
                <p class="text-muted">For large organizations</p>
                <div class="mb-4"><span class="monthly"><h2 class="d-inline">$99</h2><span class="text-muted">/month</span></span><span class="yearly" style="display:none"><h2 class="d-inline">$950</h2><span class="text-muted">/year</span></span></div>
                <ul class="list-unstyled text-start mb-4" style="font-size:.875rem">
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>Everything in Pro</li>
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>Unlimited Storage</li>
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>White Label</li>
                    <li class="py-2 border-bottom"><i class="bi bi-check-circle-fill text-success me-2"></i>24/7 Phone Support</li>
                    <li class="py-2"><i class="bi bi-check-circle-fill text-success me-2"></i>SLA Guarantee</li>
                </ul>
                <button class="btn btn-outline-primary w-100">Contact Sales</button>
            </div>
        </div>
    </div>
</div>
@endsection
