# VeloAdmin — Laravel 12 + Bootstrap 5 Admin Dashboard Template

> Premium admin dashboard template with 40+ pages, dark/light mode, ApexCharts, DataTables, Leaflet Maps, and more.

---

## 🚀 Quick Start

### Requirements
- **PHP** 8.2 or higher
- **Composer** 2.x
- **Node.js** 20.x (for development only)

### Installation

```bash
# 1. Install PHP dependencies
composer install

# 2. Copy environment file and generate key
cp .env.example .env
php artisan key:generate

# 3. Start the development server
php artisan serve
```

Open [http://127.0.0.1:8000](http://127.0.0.1:8000) — you should see the Sales Dashboard.

> **Note:** No database is required. VeloAdmin is a frontend template with static data.

---

## ✨ Features

- **3 Dashboard Variants** — Sales, eCommerce, Analytics
- **Dark & Light Mode** — Toggle with one click, persisted in localStorage
- **Responsive Layout** — Desktop, tablet, and mobile
- **Collapsible Sidebar** — Vertical layout with multi-level menus
- **ApexCharts** — Line, Bar, Pie, Donut, Radial, Mixed charts
- **DataTables** — Search, sort, pagination, export (CSV, Excel, Print)
- **Leaflet Maps** — Interactive maps with markers
- **Vector Maps** — World & USA maps with jsvectormap
- **Drag & Drop Upload** — Custom dropzone file upload
- **Form Validation** — Bootstrap validation with custom feedback
- **Invoice Page** — Professional layout with ready-to-print button
- **Profile Page** — Cover photo, tabs, settings, activity timeline
- **Pricing Page** — Monthly/Yearly toggle
- **Auth Pages** — Login, Register, Forgot Password, Lock Screen
- **Error Pages** — 404, 500, Maintenance (with countdown timer)
- **Email Templates** — Welcome, Invoice, Password Reset (inline-styled)
- **UI Components** — Buttons, Cards, Modals, Alerts, Tabs, Badges, Progress, Spinners
- **Clean & Commented Code** — Easy to customize
- **Full Documentation** — Included in `documentation/index.html`
- **FREE Lifetime Updates**

---

## 📁 Folder Structure

```
├── app/Http/Controllers/    # Thin controllers returning views
├── resources/views/
│   ├── layouts/             # app.blade.php, auth.blade.php
│   ├── partials/            # sidebar, topbar, footer
│   ├── dashboard/           # sales, ecommerce, analytics
│   ├── auth/                # login, register, forgot, lock
│   ├── pages/               # profile, invoice, pricing, faq, timeline
│   ├── errors/              # 404, 500, maintenance
│   ├── email/               # welcome, invoice, reset
│   ├── components/          # buttons, cards, modals, alerts, tabs, badges, progress
│   ├── charts/              # line, bar, pie, mixed
│   ├── tables/              # basic, datatables
│   ├── forms/               # basic, validation, file-upload
│   └── maps/                # leaflet, vector
├── public/css/              # veloadmin.css
├── public/js/               # veloadmin.js
├── routes/web.php           # All 40+ routes
└── documentation/           # Buyer documentation
```

---

## 🎨 Customization

All colors are defined as CSS custom properties in `public/css/veloadmin.css`:

```css
:root {
  --va-primary: #6366f1;    /* Change to your brand color */
  --va-success: #10b981;
  --va-danger: #ef4444;
  --va-warning: #f59e0b;
  --va-info: #06b6d4;
}
```

---

## 📄 Third-Party Libraries

| Library | License |
|---------|---------|
| Laravel 12 | MIT |
| Bootstrap 5.3 | MIT |
| ApexCharts | MIT |
| DataTables | MIT |
| Leaflet.js | BSD-2 |
| jsvectormap | MIT |
| Bootstrap Icons | MIT |
| Inter Font | OFL |

---

## 📝 Changelog

### v1.0.0 (April 2026)
- Initial release

---

## 📧 Support

For support, please leave a comment on the ThemeForest item page.

---

**Made with ❤️ by VeloAdmin**
