@extends('layouts.app')
@section('title', 'Pie & Donut Charts')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Pie & Donut Charts</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Charts</li><li>Pie</li></ul></div></div>
<div class="row g-3">
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Pie Chart</h5></div><div class="va-card-body"><div id="pie1"></div></div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Donut Chart</h5></div><div class="va-card-body"><div id="donut1"></div></div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Radial Bar</h5></div><div class="va-card-body"><div id="radial1"></div></div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Polar Area</h5></div><div class="va-card-body"><div id="polar1"></div></div></div></div>
</div>
@endsection
@push('scripts')
<script>
new ApexCharts(document.querySelector('#pie1'),{chart:{type:'pie',height:320,fontFamily:'Inter'},series:[44,55,13,43,22],labels:['Chrome','Safari','Firefox','Edge','Other'],colors:['#6366f1','#10b981','#f59e0b','#06b6d4','#ef4444'],legend:{position:'bottom'}}).render();
new ApexCharts(document.querySelector('#donut1'),{chart:{type:'donut',height:320,fontFamily:'Inter'},series:[35,25,20,15,5],labels:['Desktop','Mobile','Tablet','Smart TV','Other'],colors:['#6366f1','#a855f7','#10b981','#f59e0b','#64748b'],plotOptions:{pie:{donut:{size:'65%'}}},legend:{position:'bottom'}}).render();
new ApexCharts(document.querySelector('#radial1'),{chart:{type:'radialBar',height:320,fontFamily:'Inter'},series:[76,67,61,90],labels:['CSS','HTML','JS','PHP'],colors:['#6366f1','#10b981','#f59e0b','#ef4444'],plotOptions:{radialBar:{dataLabels:{total:{show:true,label:'Skills'}},track:{background:'var(--va-body-bg)'}}}}).render();
new ApexCharts(document.querySelector('#polar1'),{chart:{type:'polarArea',height:320,fontFamily:'Inter'},series:[14,23,21,17,15,10,12,17,21],labels:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep'],colors:['#6366f1','#a855f7','#10b981','#f59e0b','#ef4444','#06b6d4','#64748b','#ec4899','#84cc16'],legend:{position:'bottom'}}).render();
</script>
@endpush
