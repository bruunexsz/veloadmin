<?php

namespace App\Http\Controllers;

/**
 * Page Controller
 * Handles application pages: Profile, Invoice, Pricing, FAQ, Timeline
 */
class PageController extends Controller
{
    public function profile() { return view('pages.profile'); }
    public function invoice() { return view('pages.invoice'); }
    public function pricing() { return view('pages.pricing'); }
    public function faq() { return view('pages.faq'); }
    public function timeline() { return view('pages.timeline'); }
}
