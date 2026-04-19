<?php

namespace App\Http\Controllers;

class MapController extends Controller
{
    public function leaflet() { return view('maps.leaflet'); }
    public function vector() { return view('maps.vector'); }
}
