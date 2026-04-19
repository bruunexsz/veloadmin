@extends('layouts.app')
@section('title', 'Invoice Email Template')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Invoice Email</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Email Templates</li><li>Invoice</li></ul></div></div>
<div class="row justify-content-center"><div class="col-lg-8">
<div class="va-card"><div class="va-card-body p-0">
<div style="background:#f8fafc;padding:40px">
<table width="100%" cellpadding="0" cellspacing="0" style="max-width:600px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,.06)">
    <tr><td style="padding:40px;text-align:center;border-bottom:1px solid #e2e8f0"><h2 style="margin:0;font-family:Inter,sans-serif;color:#0f172a">Velo<span style="color:#6366f1">Admin</span></h2></td></tr>
    <tr><td style="padding:40px;font-family:Inter,sans-serif;font-size:14px;color:#334155;line-height:1.7">
        <h3 style="color:#0f172a">Invoice #INV-2026-0042</h3>
        <p>Hi John, here's your invoice for this month.</p>
        <table width="100%" style="border-collapse:collapse;margin:20px 0">
            <tr style="background:#f8fafc"><td style="padding:10px;border:1px solid #e2e8f0;font-weight:600">Item</td><td style="padding:10px;border:1px solid #e2e8f0;font-weight:600;text-align:right">Amount</td></tr>
            <tr><td style="padding:10px;border:1px solid #e2e8f0">Extended License</td><td style="padding:10px;border:1px solid #e2e8f0;text-align:right">$499.00</td></tr>
            <tr><td style="padding:10px;border:1px solid #e2e8f0">Support (12 months)</td><td style="padding:10px;border:1px solid #e2e8f0;text-align:right">$199.00</td></tr>
            <tr style="background:#f8fafc"><td style="padding:10px;border:1px solid #e2e8f0;font-weight:700">Total</td><td style="padding:10px;border:1px solid #e2e8f0;text-align:right;font-weight:700;color:#6366f1">$698.00</td></tr>
        </table>
        <p style="text-align:center"><a href="#" style="background:#6366f1;color:#fff;padding:12px 32px;border-radius:8px;text-decoration:none;font-weight:600;display:inline-block">View Invoice</a></p>
        <p style="color:#94a3b8;font-size:12px">Payment is due within 30 days.</p>
    </td></tr>
    <tr><td style="background:#f1f5f9;padding:20px;text-align:center;font-size:12px;color:#94a3b8;font-family:Inter,sans-serif">&copy; 2026 VeloAdmin. All rights reserved.</td></tr>
</table>
</div>
</div></div>
</div></div>
@endsection
