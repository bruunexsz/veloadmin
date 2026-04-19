@extends('layouts.app')
@section('title', 'Line Charts')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Line Charts</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Charts</li><li>Line</li></ul></div></div>
<div class="row g-3">
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Basic Line</h5></div><div class="va-card-body"><div id="lineBasic"></div></div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Area Chart</h5></div><div class="va-card-body"><div id="lineArea"></div></div></div></div>
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Multi-Series</h5></div><div class="va-card-body"><div id="lineMulti"></div></div></div></div>
</div>
@endsection
@push('scripts')
<script>
new ApexCharts(document.querySelector('#lineBasic'),{chart:{type:'line',height:300,toolbar:{show:false},fontFamily:'Inter'},series:[{name:'Sales',data:[30,40,35,50,49,60,70,91,125,90,100,110]}],colors:['#6366f1'],xaxis:{categories:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']},stroke:{curve:'smooth',width:3},grid:{borderColor:'var(--va-border-color)',strokeDashArray:4},dataLabels:{enabled:false}}).render();
new ApexCharts(document.querySelector('#lineArea'),{chart:{type:'area',height:300,toolbar:{show:false},fontFamily:'Inter'},series:[{name:'Revenue',data:[20,30,45,32,65,50,72,60,85,70,95,80]}],colors:['#10b981'],fill:{type:'gradient',gradient:{opacityFrom:0.4,opacityTo:0.05}},stroke:{curve:'smooth',width:2},xaxis:{categories:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']},grid:{borderColor:'var(--va-border-color)',strokeDashArray:4},dataLabels:{enabled:false}}).render();
new ApexCharts(document.querySelector('#lineMulti'),{chart:{type:'line',height:350,toolbar:{show:false},fontFamily:'Inter'},series:[{name:'Product A',data:[28,29,33,36,32,32,33]},{name:'Product B',data:[12,11,14,18,17,13,13]},{name:'Product C',data:[8,7,10,12,15,18,20]}],colors:['#6366f1','#f59e0b','#ef4444'],stroke:{curve:'smooth',width:2},xaxis:{categories:['Mon','Tue','Wed','Thu','Fri','Sat','Sun']},grid:{borderColor:'var(--va-border-color)',strokeDashArray:4},dataLabels:{enabled:false},legend:{position:'top'}}).render();
</script>
@endpush
