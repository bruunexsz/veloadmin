@extends('layouts.app')
@section('title', 'Welcome Email Template')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Welcome Email</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Email Templates</li><li>Welcome</li></ul></div></div>
<div class="row justify-content-center"><div class="col-lg-8">
<div class="va-card"><div class="va-card-body p-0">
<div style="background:#f8fafc;padding:40px">
<table width="100%" cellpadding="0" cellspacing="0" style="max-width:600px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,.06)">
    <tr><td style="background:linear-gradient(135deg,#6366f1,#a855f7);padding:40px;text-align:center"><h1 style="color:#fff;margin:0;font-family:Inter,sans-serif;font-size:24px">Welcome to VeloAdmin!</h1></td></tr>
    <tr><td style="padding:40px;font-family:Inter,sans-serif;font-size:14px;color:#334155;line-height:1.7">
        <p>Hi <strong>John</strong>,</p>
        <p>Welcome aboard! We're thrilled to have you as part of our community. Your account has been successfully created.</p>
        <p style="text-align:center;margin:30px 0"><a href="#" style="background:#6366f1;color:#fff;padding:12px 32px;border-radius:8px;text-decoration:none;font-weight:600;display:inline-block">Get Started</a></p>
        <p>Here's what you can do next:</p>
        <ul style="padding-left:20px"><li>Complete your profile setup</li><li>Explore the dashboard</li><li>Invite your team members</li></ul>
        <p>If you have any questions, reply to this email or visit our <a href="#" style="color:#6366f1">help center</a>.</p>
        <p>Best regards,<br><strong>The VeloAdmin Team</strong></p>
    </td></tr>
    <tr><td style="background:#f1f5f9;padding:20px;text-align:center;font-size:12px;color:#94a3b8;font-family:Inter,sans-serif">&copy; 2026 VeloAdmin. All rights reserved.<br><a href="#" style="color:#6366f1">Unsubscribe</a> | <a href="#" style="color:#6366f1">Privacy Policy</a></td></tr>
</table>
</div>
</div></div>
</div></div>
@endsection
