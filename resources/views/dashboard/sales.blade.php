{{-- Sales Management Dashboard --}}
@extends('layouts.app')
@section('title', 'Sales Dashboard')

@section('content')
<div class="va-page-header">
    <div>
        <h1 class="va-page-title">Sales Dashboard</h1>
        <ul class="va-breadcrumb mt-1">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Sales Dashboard</li>
        </ul>
    </div>
    <div class="d-flex gap-2">
        <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-download me-1"></i>Export</button>
        <button class="btn btn-primary btn-sm"><i class="bi bi-plus me-1"></i>New Sale</button>
    </div>
</div>

{{-- Stat Cards --}}
<div class="row g-3 mb-4">
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon primary"><i class="bi bi-currency-dollar"></i></div>
                <span class="va-stat-change up"><i class="bi bi-arrow-up"></i> 12.5%</span>
            </div>
            <div class="va-stat-value">$48,295</div>
            <div class="va-stat-label">Total Revenue</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate va-animate-delay-1">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon success"><i class="bi bi-cart-check"></i></div>
                <span class="va-stat-change up"><i class="bi bi-arrow-up"></i> 8.2%</span>
            </div>
            <div class="va-stat-value">1,247</div>
            <div class="va-stat-label">Total Orders</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate va-animate-delay-2">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon warning"><i class="bi bi-people"></i></div>
                <span class="va-stat-change up"><i class="bi bi-arrow-up"></i> 5.1%</span>
            </div>
            <div class="va-stat-value">3,842</div>
            <div class="va-stat-label">Customers</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate va-animate-delay-3">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon danger"><i class="bi bi-graph-up-arrow"></i></div>
                <span class="va-stat-change down"><i class="bi bi-arrow-down"></i> 2.3%</span>
            </div>
            <div class="va-stat-value">$38.50</div>
            <div class="va-stat-label">Avg. Order Value</div>
        </div>
    </div>
</div>

{{-- Revenue Chart + Top Products --}}
<div class="row g-3 mb-4">
    <div class="col-xl-8">
        <div class="va-card">
            <div class="va-card-header">
                <h5 class="va-card-title">Revenue vs Expenses</h5>
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">This Year</button>
                    <ul class="dropdown-menu"><li><a class="dropdown-item" href="#">This Month</a></li><li><a class="dropdown-item" href="#">This Year</a></li></ul>
                </div>
            </div>
            <div class="va-card-body">
                <div id="revenueChart" style="height:340px"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="va-card h-100">
            <div class="va-card-header">
                <h5 class="va-card-title">Top Selling Products</h5>
            </div>
            <div class="va-card-body p-0">
                <div class="p-3 border-bottom d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded bg-primary bg-opacity-10 p-2"><i class="bi bi-laptop text-primary"></i></div>
                        <div><div class="fw-medium">MacBook Pro 14"</div><small class="text-muted">Electronics</small></div>
                    </div>
                    <div class="text-end"><div class="fw-semibold">$2,499</div><small class="text-success">142 sold</small></div>
                </div>
                <div class="p-3 border-bottom d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded bg-success bg-opacity-10 p-2"><i class="bi bi-headphones text-success"></i></div>
                        <div><div class="fw-medium">AirPods Pro</div><small class="text-muted">Audio</small></div>
                    </div>
                    <div class="text-end"><div class="fw-semibold">$249</div><small class="text-success">98 sold</small></div>
                </div>
                <div class="p-3 border-bottom d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded bg-warning bg-opacity-10 p-2"><i class="bi bi-watch text-warning"></i></div>
                        <div><div class="fw-medium">Apple Watch S9</div><small class="text-muted">Wearables</small></div>
                    </div>
                    <div class="text-end"><div class="fw-semibold">$399</div><small class="text-success">76 sold</small></div>
                </div>
                <div class="p-3 border-bottom d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded bg-info bg-opacity-10 p-2"><i class="bi bi-phone text-info"></i></div>
                        <div><div class="fw-medium">iPhone 15 Pro</div><small class="text-muted">Smartphones</small></div>
                    </div>
                    <div class="text-end"><div class="fw-semibold">$1,199</div><small class="text-success">64 sold</small></div>
                </div>
                <div class="p-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded bg-danger bg-opacity-10 p-2"><i class="bi bi-tablet text-danger"></i></div>
                        <div><div class="fw-medium">iPad Air M2</div><small class="text-muted">Tablets</small></div>
                    </div>
                    <div class="text-end"><div class="fw-semibold">$799</div><small class="text-success">51 sold</small></div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Recent Orders --}}
<div class="row g-3">
    <div class="col-xl-8">
        <div class="va-card">
            <div class="va-card-header">
                <h5 class="va-card-title">Recent Orders</h5>
                <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
            </div>
            <div class="va-card-body p-0">
                <div class="table-responsive">
                    <table class="table va-table mb-0">
                        <thead><tr><th>Order ID</th><th>Customer</th><th>Product</th><th>Amount</th><th>Status</th><th>Date</th></tr></thead>
                        <tbody>
                            <tr><td class="fw-medium">#ORD-7841</td><td><div class="d-flex align-items-center gap-2"><img src="https://ui-avatars.com/api/?name=Sarah+J&size=28&background=6366f1&color=fff" class="rounded-circle" width="28">Sarah Johnson</div></td><td>MacBook Pro</td><td>$2,499</td><td><span class="va-badge va-badge-success">Delivered</span></td><td>Apr 15, 2026</td></tr>
                            <tr><td class="fw-medium">#ORD-7840</td><td><div class="d-flex align-items-center gap-2"><img src="https://ui-avatars.com/api/?name=Mike+C&size=28&background=10b981&color=fff" class="rounded-circle" width="28">Mike Chen</div></td><td>AirPods Pro</td><td>$249</td><td><span class="va-badge va-badge-warning">Shipping</span></td><td>Apr 14, 2026</td></tr>
                            <tr><td class="fw-medium">#ORD-7839</td><td><div class="d-flex align-items-center gap-2"><img src="https://ui-avatars.com/api/?name=Emily+D&size=28&background=f59e0b&color=fff" class="rounded-circle" width="28">Emily Davis</div></td><td>iPhone 15 Pro</td><td>$1,199</td><td><span class="va-badge va-badge-primary">Processing</span></td><td>Apr 14, 2026</td></tr>
                            <tr><td class="fw-medium">#ORD-7838</td><td><div class="d-flex align-items-center gap-2"><img src="https://ui-avatars.com/api/?name=Alex+W&size=28&background=ef4444&color=fff" class="rounded-circle" width="28">Alex Wilson</div></td><td>Apple Watch</td><td>$399</td><td><span class="va-badge va-badge-success">Delivered</span></td><td>Apr 13, 2026</td></tr>
                            <tr><td class="fw-medium">#ORD-7837</td><td><div class="d-flex align-items-center gap-2"><img src="https://ui-avatars.com/api/?name=Lisa+B&size=28&background=06b6d4&color=fff" class="rounded-circle" width="28">Lisa Brown</div></td><td>iPad Air</td><td>$799</td><td><span class="va-badge va-badge-danger">Cancelled</span></td><td>Apr 12, 2026</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="va-card h-100">
            <div class="va-card-header"><h5 class="va-card-title">Sales by Region</h5></div>
            <div class="va-card-body"><div id="regionChart" style="height:300px"></div></div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
// Revenue vs Expenses Chart
var revenueOpts = {
    chart: { type: 'area', height: 340, toolbar: { show: false }, fontFamily: 'Inter, sans-serif' },
    series: [
        { name: 'Revenue', data: [31000,40000,28000,51000,42000,62000,55000,72000,60000,80000,75000,90000] },
        { name: 'Expenses', data: [15000,20000,18000,25000,22000,30000,28000,35000,32000,38000,35000,40000] }
    ],
    colors: ['#6366f1','#f59e0b'],
    fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.4, opacityTo: 0.05 } },
    stroke: { curve: 'smooth', width: 2 },
    xaxis: { categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'] },
    yaxis: { labels: { formatter: v => '$'+v/1000+'k' } },
    tooltip: { y: { formatter: v => '$'+v.toLocaleString() } },
    grid: { borderColor: 'var(--va-border-color)', strokeDashArray: 4 },
    dataLabels: { enabled: false },
    legend: { position: 'top' }
};
new ApexCharts(document.querySelector('#revenueChart'), revenueOpts).render();

// Sales by Region Donut
var regionOpts = {
    chart: { type: 'donut', height: 300, fontFamily: 'Inter, sans-serif' },
    series: [35, 25, 20, 12, 8],
    labels: ['North America','Europe','Asia','South America','Africa'],
    colors: ['#6366f1','#10b981','#f59e0b','#06b6d4','#ef4444'],
    plotOptions: { pie: { donut: { size: '70%', labels: { show: true, total: { show: true, label: 'Total', formatter: () => '$48.2K' } } } } },
    legend: { position: 'bottom' },
    dataLabels: { enabled: false }
};
new ApexCharts(document.querySelector('#regionChart'), regionOpts).render();
</script>
@endpush
