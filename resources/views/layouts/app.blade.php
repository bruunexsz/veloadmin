<!DOCTYPE html>
<html lang="en" data-theme="light" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VeloAdmin — Premium Laravel 12 + Bootstrap 5 Admin Dashboard Template">
    <title>@yield('title', 'Dashboard') — VeloAdmin</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <!-- VeloAdmin CSS -->
    <link rel="stylesheet" href="{{ asset('css/veloadmin.css') }}">
    @stack('styles')
</head>
<body>
    <!-- Mobile Sidebar Overlay -->
    <div class="va-sidebar-overlay"></div>

    <div class="va-wrapper">
        @include('partials.sidebar')

        <div class="va-content-wrapper">
            @include('partials.topbar')

            <main class="va-main">
                @yield('content')
            </main>

            @include('partials.footer')
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.44.0/dist/apexcharts.min.js"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <!-- VeloAdmin JS -->
    <script src="{{ asset('js/veloadmin.js') }}"></script>
    @stack('scripts')
</body>
</html>
