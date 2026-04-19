@extends('layouts.app')
@section('title', 'Vector Maps')
@section('content')
<div class="va-page-header"><div><h1 class="va-page-title">Vector Maps</h1><ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Maps</li><li>Vector</li></ul></div></div>
<div class="row g-3">
    <div class="col-12"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">World Map</h5></div><div class="va-card-body"><div id="worldMap" style="height:450px"></div></div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">USA Map</h5></div><div class="va-card-body"><div id="usaMap" style="height:320px"></div></div></div></div>
    <div class="col-md-6"><div class="va-card"><div class="va-card-header"><h5 class="va-card-title">Sales by Country</h5></div><div class="va-card-body p-0">
        <div class="table-responsive"><table class="table va-table mb-0">
            <thead><tr><th>Country</th><th>Revenue</th><th>Orders</th><th>Share</th></tr></thead>
            <tbody>
                <tr><td><i class="bi bi-circle-fill text-primary me-2" style="font-size:.5rem"></i>United States</td><td>$28,500</td><td>842</td><td><div class="progress" style="height:4px;width:80px"><div class="progress-bar" style="width:60%"></div></div></td></tr>
                <tr><td><i class="bi bi-circle-fill text-success me-2" style="font-size:.5rem"></i>United Kingdom</td><td>$12,300</td><td>364</td><td><div class="progress" style="height:4px;width:80px"><div class="progress-bar bg-success" style="width:35%"></div></div></td></tr>
                <tr><td><i class="bi bi-circle-fill text-warning me-2" style="font-size:.5rem"></i>Germany</td><td>$9,800</td><td>289</td><td><div class="progress" style="height:4px;width:80px"><div class="progress-bar bg-warning" style="width:25%"></div></div></td></tr>
                <tr><td><i class="bi bi-circle-fill text-info me-2" style="font-size:.5rem"></i>France</td><td>$7,200</td><td>213</td><td><div class="progress" style="height:4px;width:80px"><div class="progress-bar bg-info" style="width:18%"></div></div></td></tr>
                <tr><td><i class="bi bi-circle-fill text-danger me-2" style="font-size:.5rem"></i>Brazil</td><td>$5,100</td><td>151</td><td><div class="progress" style="height:4px;width:80px"><div class="progress-bar bg-danger" style="width:12%"></div></div></td></tr>
            </tbody>
        </table></div>
    </div></div></div>
</div>
@endsection
@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css">
@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/us-merc.js"></script>
<script>
new jsVectorMap({
    selector:'#worldMap', map:'world', zoomOnScroll:false,
    regionStyle:{ initial:{ fill:'var(--va-border-color)' }, hover:{ fill:'#6366f1', fillOpacity:0.8 } },
    markers:[
        {name:'New York',coords:[40.71,-74.00]},
        {name:'London',coords:[51.50,-0.12]},
        {name:'Paris',coords:[48.85,2.35]},
        {name:'Tokyo',coords:[35.68,139.69]}
    ],
    markerStyle:{ initial:{ fill:'#6366f1', r:5 }, hover:{ fill:'#4f46e5' } }
});
new jsVectorMap({ selector:'#usaMap', map:'us-merc', zoomOnScroll:false,
    regionStyle:{ initial:{ fill:'var(--va-border-color)' }, hover:{ fill:'#10b981', fillOpacity:0.8 } }
});
</script>
@endpush
