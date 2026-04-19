{{-- VeloAdmin Sidebar Navigation --}}
<aside class="va-sidebar">
    <!-- Brand -->
    <div class="va-sidebar-brand">
        <div class="logo-text">Velo<span>Admin</span></div>
    </div>

    <!-- Navigation Menu -->
    <nav class="va-sidebar-menu">
        <!-- Dashboards -->
        <div class="va-menu-label">Dashboards</div>
        <div class="va-menu-item has-submenu {{ request()->is('/') || request()->is('dashboard*') ? 'open' : '' }}">
            <a href="#" class="va-menu-link">
                <i class="bi bi-grid-1x2"></i>
                <span>Dashboards</span>
                <span class="badge bg-primary rounded-pill">3</span>
                <i class="bi bi-chevron-right va-menu-arrow"></i>
            </a>
            <ul class="va-submenu">
                <li class="va-menu-item">
                    <a href="{{ url('/') }}" class="va-menu-link {{ request()->is('/') ? 'active' : '' }}">
                        <span>Sales</span>
                    </a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/dashboard/ecommerce') }}" class="va-menu-link {{ request()->is('dashboard/ecommerce') ? 'active' : '' }}">
                        <span>eCommerce</span>
                    </a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/dashboard/analytics') }}" class="va-menu-link {{ request()->is('dashboard/analytics') ? 'active' : '' }}">
                        <span>Analytics</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Apps -->
        <div class="va-menu-label">Apps</div>
        <div class="va-menu-item">
            <a href="{{ url('/pages/profile') }}" class="va-menu-link {{ request()->is('pages/profile') ? 'active' : '' }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </div>
        <div class="va-menu-item">
            <a href="{{ url('/pages/invoice') }}" class="va-menu-link {{ request()->is('pages/invoice') ? 'active' : '' }}">
                <i class="bi bi-receipt"></i>
                <span>Invoice</span>
            </a>
        </div>
        <div class="va-menu-item">
            <a href="{{ url('/pages/pricing') }}" class="va-menu-link {{ request()->is('pages/pricing') ? 'active' : '' }}">
                <i class="bi bi-tag"></i>
                <span>Pricing</span>
            </a>
        </div>
        <div class="va-menu-item">
            <a href="{{ url('/pages/faq') }}" class="va-menu-link {{ request()->is('pages/faq') ? 'active' : '' }}">
                <i class="bi bi-question-circle"></i>
                <span>FAQ</span>
            </a>
        </div>
        <div class="va-menu-item">
            <a href="{{ url('/pages/timeline') }}" class="va-menu-link {{ request()->is('pages/timeline') ? 'active' : '' }}">
                <i class="bi bi-clock-history"></i>
                <span>Timeline</span>
            </a>
        </div>

        <!-- Email Templates -->
        <div class="va-menu-item has-submenu {{ request()->is('email*') ? 'open' : '' }}">
            <a href="#" class="va-menu-link">
                <i class="bi bi-envelope"></i>
                <span>Email Templates</span>
                <i class="bi bi-chevron-right va-menu-arrow"></i>
            </a>
            <ul class="va-submenu">
                <li class="va-menu-item">
                    <a href="{{ url('/email/welcome') }}" class="va-menu-link {{ request()->is('email/welcome') ? 'active' : '' }}"><span>Welcome</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/email/invoice') }}" class="va-menu-link {{ request()->is('email/invoice') ? 'active' : '' }}"><span>Invoice</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/email/reset') }}" class="va-menu-link {{ request()->is('email/reset') ? 'active' : '' }}"><span>Password Reset</span></a>
                </li>
            </ul>
        </div>

        <!-- UI Components -->
        <div class="va-menu-label">UI Components</div>
        <div class="va-menu-item has-submenu {{ request()->is('components*') ? 'open' : '' }}">
            <a href="#" class="va-menu-link">
                <i class="bi bi-layers"></i>
                <span>Components</span>
                <i class="bi bi-chevron-right va-menu-arrow"></i>
            </a>
            <ul class="va-submenu">
                <li class="va-menu-item">
                    <a href="{{ url('/components/buttons') }}" class="va-menu-link {{ request()->is('components/buttons') ? 'active' : '' }}"><span>Buttons</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/components/cards') }}" class="va-menu-link {{ request()->is('components/cards') ? 'active' : '' }}"><span>Cards</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/components/modals') }}" class="va-menu-link {{ request()->is('components/modals') ? 'active' : '' }}"><span>Modals</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/components/alerts') }}" class="va-menu-link {{ request()->is('components/alerts') ? 'active' : '' }}"><span>Alerts</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/components/tabs') }}" class="va-menu-link {{ request()->is('components/tabs') ? 'active' : '' }}"><span>Tabs & Accordions</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/components/badges') }}" class="va-menu-link {{ request()->is('components/badges') ? 'active' : '' }}"><span>Badges</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/components/progress') }}" class="va-menu-link {{ request()->is('components/progress') ? 'active' : '' }}"><span>Progress & Spinners</span></a>
                </li>
            </ul>
        </div>

        <!-- Charts -->
        <div class="va-menu-label">Charts & Data</div>
        <div class="va-menu-item has-submenu {{ request()->is('charts*') ? 'open' : '' }}">
            <a href="#" class="va-menu-link">
                <i class="bi bi-bar-chart-line"></i>
                <span>Charts</span>
                <i class="bi bi-chevron-right va-menu-arrow"></i>
            </a>
            <ul class="va-submenu">
                <li class="va-menu-item">
                    <a href="{{ url('/charts/line') }}" class="va-menu-link {{ request()->is('charts/line') ? 'active' : '' }}"><span>Line Charts</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/charts/bar') }}" class="va-menu-link {{ request()->is('charts/bar') ? 'active' : '' }}"><span>Bar Charts</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/charts/pie') }}" class="va-menu-link {{ request()->is('charts/pie') ? 'active' : '' }}"><span>Pie & Donut</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/charts/mixed') }}" class="va-menu-link {{ request()->is('charts/mixed') ? 'active' : '' }}"><span>Mixed Charts</span></a>
                </li>
            </ul>
        </div>

        <!-- Tables -->
        <div class="va-menu-item has-submenu {{ request()->is('tables*') ? 'open' : '' }}">
            <a href="#" class="va-menu-link">
                <i class="bi bi-table"></i>
                <span>Tables</span>
                <i class="bi bi-chevron-right va-menu-arrow"></i>
            </a>
            <ul class="va-submenu">
                <li class="va-menu-item">
                    <a href="{{ url('/tables/basic') }}" class="va-menu-link {{ request()->is('tables/basic') ? 'active' : '' }}"><span>Basic Tables</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/tables/datatables') }}" class="va-menu-link {{ request()->is('tables/datatables') ? 'active' : '' }}"><span>DataTables</span></a>
                </li>
            </ul>
        </div>

        <!-- Forms -->
        <div class="va-menu-label">Forms</div>
        <div class="va-menu-item has-submenu {{ request()->is('forms*') ? 'open' : '' }}">
            <a href="#" class="va-menu-link">
                <i class="bi bi-ui-checks-grid"></i>
                <span>Forms</span>
                <i class="bi bi-chevron-right va-menu-arrow"></i>
            </a>
            <ul class="va-submenu">
                <li class="va-menu-item">
                    <a href="{{ url('/forms/basic') }}" class="va-menu-link {{ request()->is('forms/basic') ? 'active' : '' }}"><span>Basic Forms</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/forms/validation') }}" class="va-menu-link {{ request()->is('forms/validation') ? 'active' : '' }}"><span>Validation</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/forms/file-upload') }}" class="va-menu-link {{ request()->is('forms/file-upload') ? 'active' : '' }}"><span>File Upload</span></a>
                </li>
            </ul>
        </div>

        <!-- Maps -->
        <div class="va-menu-item has-submenu {{ request()->is('maps*') ? 'open' : '' }}">
            <a href="#" class="va-menu-link">
                <i class="bi bi-geo-alt"></i>
                <span>Maps</span>
                <i class="bi bi-chevron-right va-menu-arrow"></i>
            </a>
            <ul class="va-submenu">
                <li class="va-menu-item">
                    <a href="{{ url('/maps/leaflet') }}" class="va-menu-link {{ request()->is('maps/leaflet') ? 'active' : '' }}"><span>Leaflet Maps</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/maps/vector') }}" class="va-menu-link {{ request()->is('maps/vector') ? 'active' : '' }}"><span>Vector Maps</span></a>
                </li>
            </ul>
        </div>

        <!-- Auth Pages -->
        <div class="va-menu-label">Pages</div>
        <div class="va-menu-item has-submenu {{ request()->is('auth*') ? 'open' : '' }}">
            <a href="#" class="va-menu-link">
                <i class="bi bi-shield-lock"></i>
                <span>Authentication</span>
                <i class="bi bi-chevron-right va-menu-arrow"></i>
            </a>
            <ul class="va-submenu">
                <li class="va-menu-item">
                    <a href="{{ url('/auth/login') }}" class="va-menu-link"><span>Login</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/auth/register') }}" class="va-menu-link"><span>Register</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/auth/forgot-password') }}" class="va-menu-link"><span>Forgot Password</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/auth/lock-screen') }}" class="va-menu-link"><span>Lock Screen</span></a>
                </li>
            </ul>
        </div>

        <div class="va-menu-item has-submenu {{ request()->is('errors*') ? 'open' : '' }}">
            <a href="#" class="va-menu-link">
                <i class="bi bi-exclamation-triangle"></i>
                <span>Error Pages</span>
                <i class="bi bi-chevron-right va-menu-arrow"></i>
            </a>
            <ul class="va-submenu">
                <li class="va-menu-item">
                    <a href="{{ url('/errors/404') }}" class="va-menu-link"><span>404 Not Found</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/errors/500') }}" class="va-menu-link"><span>500 Server Error</span></a>
                </li>
                <li class="va-menu-item">
                    <a href="{{ url('/errors/maintenance') }}" class="va-menu-link"><span>Maintenance</span></a>
                </li>
            </ul>
        </div>
    </nav>
</aside>
