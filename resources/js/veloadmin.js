/**
 * VeloAdmin - Main JavaScript
 * Handles sidebar toggle, theme switching, and responsive behavior
 */

// Import Bootstrap
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

document.addEventListener('DOMContentLoaded', function () {

    // ---- Theme Mode (Dark/Light) ----
    const themeToggle = document.getElementById('themeToggle');
    const savedTheme = localStorage.getItem('va-theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
    if (document.body.classList.contains('auth-page') === false) {
        document.documentElement.setAttribute('data-bs-theme', savedTheme);
    }
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
                sidebar?.classList.toggle('show');
                overlay?.classList.toggle('show');
            } else {
                document.body.classList.toggle('sidebar-collapsed');
                localStorage.setItem('va-sidebar-collapsed', document.body.classList.contains('sidebar-collapsed'));
            }
        });
    }

    if (overlay) {
        overlay.addEventListener('click', function () {
            sidebar?.classList.remove('show');
            overlay.classList.remove('show');
        });
    }

    // Restore sidebar state
    if (localStorage.getItem('va-sidebar-collapsed') === 'true' && window.innerWidth >= 992) {
        document.body.classList.add('sidebar-collapsed');
    }

    // ---- Sidebar Submenu Toggle ----
    document.querySelectorAll('.va-menu-item.has-submenu > .va-menu-link').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const parent = this.closest('.va-menu-item');
            parent.classList.toggle('open');
        });
    });

    // ---- Responsive: close sidebar on resize ----
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) {
            sidebar?.classList.remove('show');
            overlay?.classList.remove('show');
        }
    });

    // ---- Tooltips Init ----
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (el) {
        new bootstrap.Tooltip(el);
    });

    // ---- Popovers Init ----
    document.querySelectorAll('[data-bs-toggle="popover"]').forEach(function (el) {
        new bootstrap.Popover(el);
    });
});
