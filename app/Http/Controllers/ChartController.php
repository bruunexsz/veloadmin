<?php

namespace App\Http\Controllers;

class ChartController extends Controller
{
    public function line() { return view('charts.line'); }
    public function bar() { return view('charts.bar'); }
    public function pie() { return view('charts.pie'); }
    public function mixed() { return view('charts.mixed'); }
}
