<?php

/**
 * VeloAdmin - Web Routes
 *
 * All routes for the admin template pages.
 * Controllers are thin — they only return views.
 */

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ErrorPageController;
use Illuminate\Support\Facades\Route;

// ---- Dashboards ----
Route::get('/', [DashboardController::class, 'sales'])->name('dashboard.sales');
Route::get('/dashboard/ecommerce', [DashboardController::class, 'ecommerce'])->name('dashboard.ecommerce');
Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('dashboard.analytics');

// ---- Auth Pages (no middleware, these are template pages) ----
Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot-password');
Route::get('/auth/lock-screen', [AuthController::class, 'lockScreen'])->name('auth.lock-screen');

// ---- Application Pages ----
Route::get('/pages/profile', [PageController::class, 'profile'])->name('pages.profile');
Route::get('/pages/invoice', [PageController::class, 'invoice'])->name('pages.invoice');
Route::get('/pages/pricing', [PageController::class, 'pricing'])->name('pages.pricing');
Route::get('/pages/faq', [PageController::class, 'faq'])->name('pages.faq');
Route::get('/pages/timeline', [PageController::class, 'timeline'])->name('pages.timeline');

// ---- Error Pages ----
Route::get('/errors/404', [ErrorPageController::class, 'error404'])->name('errors.404');
Route::get('/errors/500', [ErrorPageController::class, 'error500'])->name('errors.500');
Route::get('/errors/maintenance', [ErrorPageController::class, 'maintenance'])->name('errors.maintenance');

// ---- Email Templates ----
Route::get('/email/welcome', [EmailController::class, 'welcome'])->name('email.welcome');
Route::get('/email/invoice', [EmailController::class, 'invoice'])->name('email.invoice');
Route::get('/email/reset', [EmailController::class, 'reset'])->name('email.reset');

// ---- UI Components ----
Route::get('/components/buttons', [ComponentController::class, 'buttons'])->name('components.buttons');
Route::get('/components/cards', [ComponentController::class, 'cards'])->name('components.cards');
Route::get('/components/modals', [ComponentController::class, 'modals'])->name('components.modals');
Route::get('/components/alerts', [ComponentController::class, 'alerts'])->name('components.alerts');
Route::get('/components/tabs', [ComponentController::class, 'tabs'])->name('components.tabs');
Route::get('/components/badges', [ComponentController::class, 'badges'])->name('components.badges');
Route::get('/components/progress', [ComponentController::class, 'progress'])->name('components.progress');

// ---- Charts ----
Route::get('/charts/line', [ChartController::class, 'line'])->name('charts.line');
Route::get('/charts/bar', [ChartController::class, 'bar'])->name('charts.bar');
Route::get('/charts/pie', [ChartController::class, 'pie'])->name('charts.pie');
Route::get('/charts/mixed', [ChartController::class, 'mixed'])->name('charts.mixed');

// ---- Tables ----
Route::get('/tables/basic', [TableController::class, 'basic'])->name('tables.basic');
Route::get('/tables/datatables', [TableController::class, 'datatables'])->name('tables.datatables');

// ---- Forms ----
Route::get('/forms/basic', [FormController::class, 'basic'])->name('forms.basic');
Route::get('/forms/validation', [FormController::class, 'validation'])->name('forms.validation');
Route::get('/forms/file-upload', [FormController::class, 'fileUpload'])->name('forms.file-upload');

// ---- Maps ----
Route::get('/maps/leaflet', [MapController::class, 'leaflet'])->name('maps.leaflet');
Route::get('/maps/vector', [MapController::class, 'vector'])->name('maps.vector');


Route::get('/teste',[TesteController::class,'index'])->name('teste.index');
