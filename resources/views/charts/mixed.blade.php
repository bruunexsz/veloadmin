@extends('layouts.app')
@section('title', 'Mixed Charts')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Mixed Charts</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Charts</li><li>Mixed</li></ul></div></div>
<div class="row g-3">
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Line & Column Mixed</h5></div><div class="va-card-body"><div id="mixed1"></div></div></div></div>
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Area & Line Mixed</h5></div><div class="va-card-body"><div id="mixed2"></div></div></div></div>
</div>
@endsection
@push('scripts')
<script>
new ApexCharts(document.querySelector('#mixed1'),{chart:{height:380,type:'line',toolbar:{show:false},fontFamily:'Inter'},series:[{name:'Revenue',type:'column',data:[440,505,414,671,227,413,201,352,652,320,257,160]},{name:'Profit',type:'line',data:[230,420,350,270,430,320,170,290,510,210,340,120]}],colors:['#6366f1','#10b981'],stroke:{width:[0,3],curve:'smooth'},plotOptions:{bar:{borderRadius:4,columnWidth:'50%'}},xaxis:{categories:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']},yaxis:[{title:{text:'Revenue ($)'}},{opposite:true,title:{text:'Profit ($)'}}],grid:{borderColor:'var(--va-border-color)',strokeDashArray:4},legend:{position:'top'},dataLabels:{enabled:false}}).render();
new ApexCharts(document.querySelector('#mixed2'),{chart:{height:380,type:'area',toolbar:{show:false},fontFamily:'Inter'},series:[{name:'Sessions',type:'area',data:[45,52,38,24,33,26,21,20,6,8,15,10]},{name:'Pageviews',type:'line',data:[87,57,74,99,75,38,62,47,82,56,45,47]}],colors:['#6366f1','#f59e0b'],fill:{type:['gradient','solid'],gradient:{opacityFrom:0.3,opacityTo:0.05}},stroke:{curve:'smooth',width:[1,3]},xaxis:{categories:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']},grid:{borderColor:'var(--va-border-color)',strokeDashArray:4},legend:{position:'top'},dataLabels:{enabled:false}}).render();
</script>
@endpush
