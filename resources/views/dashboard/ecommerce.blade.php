{{-- eCommerce Dashboard --}}
@extends('layouts.app')
@section('title', 'eCommerce Dashboard')

@section('content')
<div class="va-page-header">
    <div>
        <h1 class="va-page-title">eCommerce Dashboard</h1>
        <ul class="va-breadcrumb mt-1"><li><a href="{{ url('/') }}">Home</a></li><li>eCommerce</li></ul>
    </div>
</div>

<div class="row g-3 mb-4">
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon primary"><i class="bi bi-box-seam"></i></div>
                <span class="va-stat-change up"><i class="bi bi-arrow-up"></i> 6.4%</span>
            </div>
            <div class="va-stat-value">2,456</div>
            <div class="va-stat-label">Total Products</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate va-animate-delay-1">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon success"><i class="bi bi-bag-check"></i></div>
                <span class="va-stat-change up"><i class="bi bi-arrow-up"></i> 15.2%</span>
            </div>
            <div class="va-stat-value">$124,750</div>
            <div class="va-stat-label">Monthly Sales</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate va-animate-delay-2">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon info"><i class="bi bi-arrow-repeat"></i></div>
                <span class="va-stat-change down"><i class="bi bi-arrow-down"></i> 3.1%</span>
            </div>
            <div class="va-stat-value">89</div>
            <div class="va-stat-label">Returns</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="va-stat-card va-animate va-animate-delay-3">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="va-stat-icon warning"><i class="bi bi-star"></i></div>
                <span class="va-stat-change up"><i class="bi bi-arrow-up"></i> 0.8%</span>
            </div>
            <div class="va-stat-value">4.8</div>
            <div class="va-stat-label">Avg. Rating</div>
        </div>
    </div>
</div>

<div class="row g-3 mb-4">
    <div class="col-xl-8">
        <div class="va-card">
            <div class="va-card-header"><h5 class="va-card-title">Orders Overview</h5></div>
            <div class="va-card-body"><div id="ordersChart" style="height:340px"></div></div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="va-card h-100">
            <div class="va-card-header"><h5 class="va-card-title">Best Selling Categories</h5></div>
            <div class="va-card-body"><div id="categoryChart" style="height:300px"></div></div>
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-xl-8">
        <div class="va-card">
            <div class="va-card-header"><h5 class="va-card-title">Recent Transactions</h5></div>
            <div class="va-card-body p-0">
                <div class="table-responsive">
                    <table class="table va-table mb-0">
                        <thead><tr><th>Transaction</th><th>Customer</th><th>Amount</th><th>Method</th><th>Status</th></tr></thead>
                        <tbody>
                            <tr><td class="fw-medium">#TXN-9841</td><td>Robert Fox</td><td>$450.00</td><td><i class="bi bi-credit-card me-1"></i>Visa ****4242</td><td><span class="va-badge va-badge-success">Completed</span></td></tr>
                            <tr><td class="fw-medium">#TXN-9840</td><td>Jenny Wilson</td><td>$125.50</td><td><i class="bi bi-paypal me-1"></i>PayPal</td><td><span class="va-badge va-badge-success">Completed</span></td></tr>
                            <tr><td class="fw-medium">#TXN-9839</td><td>Devon Lane</td><td>$890.00</td><td><i class="bi bi-credit-card me-1"></i>Mastercard ****8888</td><td><span class="va-badge va-badge-warning">Pending</span></td></tr>
                            <tr><td class="fw-medium">#TXN-9838</td><td>Cody Fisher</td><td>$67.99</td><td><i class="bi bi-wallet2 me-1"></i>Apple Pay</td><td><span class="va-badge va-badge-success">Completed</span></td></tr>
                            <tr><td class="fw-medium">#TXN-9837</td><td>Theresa Webb</td><td>$324.00</td><td><i class="bi bi-credit-card me-1"></i>Visa ****1234</td><td><span class="va-badge va-badge-danger">Refunded</span></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="va-card h-100">
            <div class="va-card-header"><h5 class="va-card-title">Activity</h5></div>
            <div class="va-card-body">
                <div class="va-timeline">
                    <div class="va-timeline-item"><div class="fw-medium" style="font-size:.8125rem">New order placed #ORD-7841</div><small class="text-muted">2 minutes ago</small></div>
                    <div class="va-timeline-item"><div class="fw-medium" style="font-size:.8125rem">Payment received from Sarah</div><small class="text-muted">15 minutes ago</small></div>
                    <div class="va-timeline-item"><div class="fw-medium" style="font-size:.8125rem">Product "AirPods" updated</div><small class="text-muted">1 hour ago</small></div>
                    <div class="va-timeline-item"><div class="fw-medium" style="font-size:.8125rem">New customer registered</div><small class="text-muted">3 hours ago</small></div>
                    <div class="va-timeline-item"><div class="fw-medium" style="font-size:.8125rem">Refund processed #TXN-9837</div><small class="text-muted">5 hours ago</small></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
new ApexCharts(document.querySelector('#ordersChart'), {
    chart: { type: 'bar', height: 340, toolbar: { show: false }, fontFamily: 'Inter' },
    series: [{ name: 'Orders', data: [44,55,41,67,22,43,56,78,45,62,58,71] },{ name: 'Returns', data: [5,8,3,6,2,4,7,5,3,6,4,5] }],
    colors: ['#6366f1','#ef4444'],
    plotOptions: { bar: { borderRadius: 6, columnWidth: '50%' } },
    xaxis: { categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'] },
    grid: { borderColor: 'var(--va-border-color)', strokeDashArray: 4 },
    dataLabels: { enabled: false },
    legend: { position: 'top' }
}).render();

new ApexCharts(document.querySelector('#categoryChart'), {
    chart: { type: 'donut', height: 300, fontFamily: 'Inter' },
    series: [40, 25, 18, 10, 7],
    labels: ['Electronics','Fashion','Home','Sports','Books'],
    colors: ['#6366f1','#10b981','#f59e0b','#06b6d4','#a855f7'],
    plotOptions: { pie: { donut: { size: '68%' } } },
    legend: { position: 'bottom' },
    dataLabels: { enabled: false }
}).render();
</script>
@endpush
