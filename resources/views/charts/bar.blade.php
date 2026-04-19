@extends('layouts.app')
@section('title', 'Bar Charts')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Bar Charts</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Charts</li><li>Bar</li></ul></div></div>
<div class="row g-3">
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Vertical Bar</h5></div><div class="va-card-body"><div id="barVertical"></div></div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Horizontal Bar</h5></div><div class="va-card-body"><div id="barHorizontal"></div></div></div></div>
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Grouped Bar</h5></div><div class="va-card-body"><div id="barGrouped"></div></div></div></div>
</div>
@endsection
@push('scripts')
<script>
new ApexCharts(document.querySelector('#barVertical'),{chart:{type:'bar',height:300,toolbar:{show:false},fontFamily:'Inter'},series:[{name:'Revenue',data:[44,55,57,56,61,58,63,60,66]}],colors:['#6366f1'],plotOptions:{bar:{borderRadius:6,columnWidth:'45%'}},xaxis:{categories:['Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct']},grid:{borderColor:'var(--va-border-color)',strokeDashArray:4},dataLabels:{enabled:false}}).render();
new ApexCharts(document.querySelector('#barHorizontal'),{chart:{type:'bar',height:300,toolbar:{show:false},fontFamily:'Inter'},series:[{data:[400,430,448,470,540,580,690]}],colors:['#10b981'],plotOptions:{bar:{borderRadius:6,horizontal:true,barHeight:'45%'}},xaxis:{categories:['Netherlands','Italy','France','Japan','USA','China','Germany']},grid:{borderColor:'var(--va-border-color)',strokeDashArray:4},dataLabels:{enabled:false}}).render();
new ApexCharts(document.querySelector('#barGrouped'),{chart:{type:'bar',height:350,toolbar:{show:false},fontFamily:'Inter'},series:[{name:'2025',data:[44,55,41,64,22,43,21]},{name:'2026',data:[53,32,33,52,13,44,32]}],colors:['#6366f1','#f59e0b'],plotOptions:{bar:{borderRadius:4,columnWidth:'50%'}},xaxis:{categories:['Mon','Tue','Wed','Thu','Fri','Sat','Sun']},grid:{borderColor:'var(--va-border-color)',strokeDashArray:4},dataLabels:{enabled:false},legend:{position:'top'}}).render();
</script>
@endpush
