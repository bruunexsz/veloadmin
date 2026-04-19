@extends('layouts.app')
@section('title', 'Invoice')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Invoice</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Invoice</li></ul></div>
    <button class="btn btn-primary btn-sm no-print" onclick="window.print()"><i class="bi bi-printer me-1"></i>Print Invoice</button>
</div>

<div class="va-invoice va-card">
    <div class="d-flex justify-content-between flex-wrap mb-5">
        <div><div class="logo-text mb-2" style="font-size:1.5rem;font-weight:700;color:var(--va-heading-color)">Velo<span style="color:var(--va-primary)">Admin</span></div><p class="text-muted mb-0">123 Business Ave, Suite 100<br>San Francisco, CA 94102<br>contact@veloadmin.com</p></div>
        <div class="text-end"><h3 class="text-uppercase" style="color:var(--va-primary)">Invoice</h3><p class="mb-0"><strong>Invoice #:</strong> INV-2026-0042</p><p class="mb-0"><strong>Date:</strong> April 18, 2026</p><p class="mb-0"><strong>Due Date:</strong> May 18, 2026</p></div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6"><h6 class="text-muted mb-2">Bill To:</h6><h5>Acme Corporation</h5><p class="text-muted mb-0">456 Client St, Suite 200<br>New York, NY 10001<br>billing@acme.com</p></div>
        <div class="col-md-6 text-md-end"><h6 class="text-muted mb-2">Payment Method:</h6><p class="mb-0">Visa ending in ****4242<br>john@acme.com</p></div>
    </div>

    <div class="table-responsive mb-4">
        <table class="table va-table">
            <thead><tr><th>#</th><th>Description</th><th class="text-center">Qty</th><th class="text-end">Unit Price</th><th class="text-end">Total</th></tr></thead>
            <tbody>
                <tr><td>1</td><td>VeloAdmin Extended License</td><td class="text-center">1</td><td class="text-end">$499.00</td><td class="text-end">$499.00</td></tr>
                <tr><td>2</td><td>Custom Development (40 hours)</td><td class="text-center">40</td><td class="text-end">$75.00</td><td class="text-end">$3,000.00</td></tr>
                <tr><td>3</td><td>Premium Support (12 months)</td><td class="text-center">1</td><td class="text-end">$199.00</td><td class="text-end">$199.00</td></tr>
                <tr><td>4</td><td>Server Setup & Deployment</td><td class="text-center">1</td><td class="text-end">$350.00</td><td class="text-end">$350.00</td></tr>
            </tbody>
        </table>
    </div>

    <div class="row justify-content-end">
        <div class="col-md-5">
            <div class="d-flex justify-content-between mb-2"><span>Subtotal:</span><span class="fw-semibold">$4,048.00</span></div>
            <div class="d-flex justify-content-between mb-2"><span>Tax (10%):</span><span class="fw-semibold">$404.80</span></div>
            <div class="d-flex justify-content-between mb-2"><span>Discount:</span><span class="fw-semibold text-success">-$200.00</span></div>
            <hr>
            <div class="d-flex justify-content-between"><h5>Total:</h5><h5 style="color:var(--va-primary)">$4,252.80</h5></div>
        </div>
    </div>

    <hr class="my-4">
    <div class="text-muted" style="font-size:.8125rem"><strong>Notes:</strong> Payment is due within 30 days. Late payments may incur additional fees. Thank you for your business!</div>
</div>
@endsection
