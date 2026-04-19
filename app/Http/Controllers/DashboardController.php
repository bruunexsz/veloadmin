<?php

namespace App\Http\Controllers;

/**
 * Dashboard Controller
 * Handles the three dashboard variants: Sales, eCommerce, Analytics
 */
class DashboardController extends Controller
{
    public function sales()
    {
        return view('dashboard.sales');
    }

    public function ecommerce()
    {
        return view('dashboard.ecommerce');
    }

    public function analytics()
    {
        return view('dashboard.analytics');
    }
}
