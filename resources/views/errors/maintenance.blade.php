@extends('layouts.auth')
@section('title', 'Maintenance')
@section('content')
<div class="va-error-wrapper">
    <div class="rounded-circle bg-warning bg-opacity-10 d-inline-flex p-4 mb-4"><i class="bi bi-gear-wide-connected text-warning" style="font-size:3rem"></i></div>
    <h3 class="mb-2">Under Maintenance</h3>
    <p class="text-muted mb-4" style="max-width:450px">We're performing scheduled maintenance. We'll be back shortly. Thank you for your patience.</p>
    <div class="d-flex gap-3 justify-content-center mb-4">
        <div class="text-center"><div class="h3 mb-0" id="hours">02</div><small class="text-muted">Hours</small></div>
        <div class="h3 mb-0">:</div>
        <div class="text-center"><div class="h3 mb-0" id="minutes">45</div><small class="text-muted">Minutes</small></div>
        <div class="h3 mb-0">:</div>
        <div class="text-center"><div class="h3 mb-0" id="seconds">30</div><small class="text-muted">Seconds</small></div>
    </div>
    <div class="d-flex gap-2 justify-content-center">
        <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-twitter-x me-1"></i>Follow Updates</a>
        <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-envelope me-1"></i>Contact Support</a>
    </div>
</div>
<script>
let t=9930;setInterval(()=>{if(t<=0)return;t--;let h=Math.floor(t/3600),m=Math.floor((t%3600)/60),s=t%60;document.getElementById('hours').textContent=String(h).padStart(2,'0');document.getElementById('minutes').textContent=String(m).padStart(2,'0');document.getElementById('seconds').textContent=String(s).padStart(2,'0')},1000);
</script>
@endsection
