@extends('layouts.app')
@section('title', 'Password Reset Email')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Password Reset Email</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Email Templates</li><li>Password Reset</li></ul></div></div>
<div class="row justify-content-center"><div class="col-lg-8">
<div class="va-card"><div class="va-card-body p-0">
<div style="background:#f8fafc;padding:40px">
<table width="100%" cellpadding="0" cellspacing="0" style="max-width:600px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,.06)">
    <tr><td style="padding:40px;text-align:center;border-bottom:1px solid #e2e8f0"><h2 style="margin:0;font-family:Inter,sans-serif;color:#0f172a">Velo<span style="color:#6366f1">Admin</span></h2></td></tr>
    <tr><td style="padding:40px;font-family:Inter,sans-serif;font-size:14px;color:#334155;line-height:1.7;text-align:center">
        <div style="background:#fef3c7;border-radius:50%;width:64px;height:64px;margin:0 auto 20px;display:flex;align-items:center;justify-content:center"><span style="font-size:28px">🔑</span></div>
        <h3 style="color:#0f172a">Reset Your Password</h3>
        <p>We received a request to reset your password. Click the button below to set a new one.</p>
        <p style="margin:30px 0"><a href="#" style="background:#6366f1;color:#fff;padding:14px 40px;border-radius:8px;text-decoration:none;font-weight:600;display:inline-block">Reset Password</a></p>
        <p style="color:#94a3b8;font-size:12px">This link will expire in 60 minutes. If you didn't request this, please ignore this email.</p>
    </td></tr>
    <tr><td style="background:#f1f5f9;padding:20px;text-align:center;font-size:12px;color:#94a3b8;font-family:Inter,sans-serif">&copy; 2026 VeloAdmin. All rights reserved.</td></tr>
</table>
</div>
</div></div>
</div></div>
@endsection
