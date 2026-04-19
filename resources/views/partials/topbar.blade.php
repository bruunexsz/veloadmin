{{-- VeloAdmin Top Navigation Bar --}}
<header class="va-topbar">
    <div class="va-topbar-left">
        <button class="va-sidebar-toggle" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>
        <div class="va-search-box">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search...">
        </div>
    </div>

    <div class="va-topbar-right">
        {{-- Theme Toggle --}}
        <button class="va-theme-toggle" id="themeToggle" title="Toggle theme">
            <i class="bi bi-moon-stars"></i>
        </button>

        {{-- Notifications --}}
        <div class="va-topbar-icon dropdown">
            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-bell"></i>
                <span class="badge-dot"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end p-0" style="width:320px">
                <div class="p-3 border-bottom">
                    <h6 class="mb-0">Notifications</h6>
                </div>
                <div class="p-2">
                    <a class="dropdown-item d-flex gap-3 p-2 rounded" href="#">
                        <div class="va-stat-icon primary" style="width:36px;height:36px;font-size:.875rem;flex-shrink:0"><i class="bi bi-cart-check"></i></div>
                        <div><p class="mb-0 fw-medium" style="font-size:.8125rem">New order received</p><small class="text-muted">2 min ago</small></div>
                    </a>
                    <a class="dropdown-item d-flex gap-3 p-2 rounded" href="#">
                        <div class="va-stat-icon success" style="width:36px;height:36px;font-size:.875rem;flex-shrink:0"><i class="bi bi-person-plus"></i></div>
                        <div><p class="mb-0 fw-medium" style="font-size:.8125rem">New user registered</p><small class="text-muted">1 hour ago</small></div>
                    </a>
                    <a class="dropdown-item d-flex gap-3 p-2 rounded" href="#">
                        <div class="va-stat-icon warning" style="width:36px;height:36px;font-size:.875rem;flex-shrink:0"><i class="bi bi-exclamation-triangle"></i></div>
                        <div><p class="mb-0 fw-medium" style="font-size:.8125rem">Server CPU usage high</p><small class="text-muted">3 hours ago</small></div>
                    </a>
                </div>
                <div class="p-2 border-top text-center">
                    <a href="#" class="text-primary" style="font-size:.8125rem">View all notifications</a>
                </div>
            </div>
        </div>

        {{-- Messages --}}
        <div class="va-topbar-icon">
            <i class="bi bi-chat-dots"></i>
            <span class="badge-dot"></span>
        </div>

        {{-- User Dropdown --}}
        <div class="dropdown">
            <div class="va-user-dropdown" data-bs-toggle="dropdown">
                <img src="https://ui-avatars.com/api/?name=John+Doe&background=6366f1&color=fff&size=80" alt="User">
                <div class="va-user-info d-none d-md-block">
                    <div class="va-user-name">John Doe</div>
                    <div class="va-user-role">Administrator</div>
                </div>
                <i class="bi bi-chevron-down ms-1" style="font-size:.7rem"></i>
            </div>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ url('/pages/profile') }}"><i class="bi bi-person me-2"></i> Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Settings</a></li>
                <li><a class="dropdown-item" href="{{ url('/pages/invoice') }}"><i class="bi bi-receipt me-2"></i> Billing</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="{{ url('/auth/login') }}"><i class="bi bi-box-arrow-right me-2"></i> Sign Out</a></li>
            </ul>
        </div>
    </div>
</header>
