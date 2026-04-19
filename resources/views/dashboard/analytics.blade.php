{{-- Analytics Dashboard --}}
@extends('layouts.app')
@section('title', 'Analytics Dashboard')

@section('content')
<div class="va-page-header">
    <div>
        <h1 class="va-page-title">Analytics Dashboard</h1>
        <ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>Analytics</li></ul>
    </div>
    <div class="d-flex gap-2">
        <input type="date" class="form-control form-control-sm" value="2026-04-01" style="width:140px">
        <input type="date" class="form-control form-control-sm" value="2026-04-18" style="width:140px">
    </div>
</div>

<div class="row g-3 mb-4">
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon primary"><i class="bi bi-eye"></i></div>
                <span class="va-stat-change up"><i class="bi bi-arrow-up"></i> 18.2%</span>
            </div>
            <div class="va-stat-value">52,147</div>
            <div class="va-stat-label">Page Views</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate va-animate-delay-1">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon success"><i class="bi bi-person-check"></i></div>
                <span class="va-stat-change up"><i class="bi bi-arrow-up"></i> 9.7%</span>
            </div>
            <div class="va-stat-value">8,432</div>
            <div class="va-stat-label">Unique Visitors</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate va-animate-delay-2">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon warning"><i class="bi bi-arrow-return-left"></i></div>
                <span class="va-stat-change down"><i class="bi bi-arrow-down"></i> 1.4%</span>
            </div>
            <div class="va-stat-value">42.3%</div>
            <div class="va-stat-label">Bounce Rate</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate va-animate-delay-3">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon info"><i class="bi bi-clock"></i></div>
                <span class="va-stat-change up"><i class="bi bi-arrow-up"></i> 3.5%</span>
            </div>
            <div class="va-stat-value">4m 32s</div>
            <div class="va-stat-label">Avg. Duration</div>
        </div>
    </div>
</div>

<div class="row g-3 mb-4">
    <div class="col-xl-8">
        <div class="va-card">
            <div class="va-card-header"><h5 class="va-card-title">Audience Overview</h5></div>
            <div class="va-card-body"><div id="audienceChart" style="height:340px"></div></div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="va-card h-100">
            <div class="va-card-header"><h5 class="va-card-title">Traffic Sources</h5></div>
            <div class="va-card-body"><div id="trafficChart" style="height:280px"></div></div>
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-xl-6">
        <div class="va-card">
            <div class="va-card-header"><h5 class="va-card-title">Top Pages</h5></div>
            <div class="va-card-body p-0">
                <div class="table-responsive">
                    <table class="table va-table mb-0">
                        <thead><tr><th>Page</th><th>Views</th><th>Bounce</th><th>Duration</th></tr></thead>
                        <tbody>
                            <tr><td>/dashboard</td><td>12,482</td><td>32%</td><td>5m 12s</td></tr>
                            <tr><td>/products</td><td>8,241</td><td>45%</td><td>3m 45s</td></tr>
                            <tr><td>/pricing</td><td>5,123</td><td>28%</td><td>6m 08s</td></tr>
                            <tr><td>/blog/post-1</td><td>3,890</td><td>51%</td><td>2m 30s</td></tr>
                            <tr><td>/contact</td><td>2,456</td><td>38%</td><td>4m 15s</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="va-card">
            <div class="va-card-header"><h5 class="va-card-title">Browser Usage</h5></div>
            <div class="va-card-body"><div id="browserChart" style="height:280px"></div></div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
new ApexCharts(document.querySelector('#audienceChart'), {
    chart: { type: 'area', height: 340, toolbar: { show: false }, fontFamily: 'Inter' },
    series: [{ name: 'Sessions', data: [1200,1800,1400,2200,1900,2800,2400,3100,2700,3500,3200,3800] },{ name: 'Users', data: [800,1200,1000,1600,1300,2000,1700,2300,1900,2600,2300,2900] }],
    colors: ['#6366f1','#10b981'],
    fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.35, opacityTo: 0.05 } },
    stroke: { curve: 'smooth', width: 2 },
    xaxis: { categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'] },
    grid: { borderColor: 'var(--va-border-color)', strokeDashArray: 4 },
    dataLabels: { enabled: false },
    legend: { position: 'top' }
}).render();

new ApexCharts(document.querySelector('#trafficChart'), {
    chart: { type: 'radialBar', height: 280, fontFamily: 'Inter' },
    series: [44, 25, 18, 13],
    labels: ['Organic','Direct','Social','Referral'],
    colors: ['#6366f1','#10b981','#f59e0b','#06b6d4'],
    plotOptions: { radialBar: { dataLabels: { total: { show: true, label: 'Total', formatter: () => '8,432' } }, track: { background: 'var(--va-body-bg)' } } }
}).render();

new ApexCharts(document.querySelector('#browserChart'), {
    chart: { type: 'bar', height: 280, toolbar: { show: false }, fontFamily: 'Inter' },
    series: [{ name: 'Users', data: [4200, 2100, 1200, 650, 282] }],
    colors: ['#6366f1'],
    plotOptions: { bar: { borderRadius: 6, horizontal: true, barHeight: '50%' } },
    xaxis: { categories: ['Chrome','Safari','Firefox','Edge','Other'] },
    grid: { borderColor: 'var(--va-border-color)', strokeDashArray: 4 },
    dataLabels: { enabled: false }
}).render();
</script>
@endpush
