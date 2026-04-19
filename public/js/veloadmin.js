/**
 * VeloAdmin - Main JavaScript
 * Handles sidebar toggle, theme switching, and responsive behavior
 */
document.addEventListener('DOMContentLoaded', function () {

    // ---- Theme Mode (Dark/Light) ----
    const themeToggle = document.getElementById('themeToggle');
    const savedTheme = localStorage.getItem('va-theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
    document.documentElement.setAttribute('data-bs-theme', savedTheme);
    updateThemeIcon(savedTheme);

    if (themeToggle) {
        themeToggle.addEventListener('click', function () {
            const current = document.documentElement.getAttribute('data-theme');
            const next = current === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', next);
            document.documentElement.setAttribute('data-bs-theme', next);
            localStorage.setItem('va-theme', next);
            updateThemeIcon(next);
        });
    }

    function updateThemeIcon(theme) {
        if (!themeToggle) return;
        themeToggle.innerHTML = theme === 'dark'
            ? '<i class="bi bi-sun"></i>'
            : '<i class="bi bi-moon-stars"></i>';
    }

    // ---- Sidebar Toggle ----
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.querySelector('.va-sidebar');
    const overlay = document.querySelector('.va-sidebar-overlay');

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function () {
            if (window.innerWidth < 992) {
                sidebar && sidebar.classList.toggle('show');
                overlay && overlay.classList.toggle('show');
            } else {
                document.body.classList.toggle('sidebar-collapsed');
                localStorage.setItem('va-sidebar-collapsed', document.body.classList.contains('sidebar-collapsed'));
            }
        });
    }

    if (overlay) {
        overlay.addEventListener('click', function () {
            sidebar && sidebar.classList.remove('show');
            overlay.classList.remove('show');
        });
    }

    // Restore sidebar collapsed state
    if (localStorage.getItem('va-sidebar-collapsed') === 'true' && window.innerWidth >= 992) {
        document.body.classList.add('sidebar-collapsed');
    }

    // ---- Sidebar Submenu Toggle ----
    document.querySelectorAll('.va-menu-item.has-submenu > .va-menu-link').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const parent = this.closest('.va-menu-item');
            const wasOpen = parent.classList.contains('open');
            // Close all siblings first
            parent.parentElement.querySelectorAll('.va-menu-item.has-submenu.open').forEach(function(el) {
                if (el !== parent) el.classList.remove('open');
            });
            parent.classList.toggle('open', !wasOpen);
        });
    });

    // ---- Responsive: close sidebar on resize ----
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) {
            sidebar && sidebar.classList.remove('show');
            overlay && overlay.classList.remove('show');
        }
    });

    // ---- Bootstrap Tooltips ----
    if (typeof bootstrap !== 'undefined') {
        document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (el) {
            new bootstrap.Tooltip(el);
        });
        document.querySelectorAll('[data-bs-toggle="popover"]').forEach(function (el) {
            new bootstrap.Popover(el);
        });
    }
});
