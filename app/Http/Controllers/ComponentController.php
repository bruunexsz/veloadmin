<?php

namespace App\Http\Controllers;

/**
 * Component Controller
 * Handles UI component showcase pages
 */
class ComponentController extends Controller
{
    public function buttons() { return view('components.buttons'); }
    public function cards() { return view('components.cards'); }
    public function modals() { return view('components.modals'); }
    public function alerts() { return view('components.alerts'); }
    public function tabs() { return view('components.tabs'); }
    public function badges() { return view('components.badges'); }
    public function progress() { return view('components.progress'); }
}
