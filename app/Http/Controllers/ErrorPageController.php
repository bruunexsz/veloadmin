<?php

namespace App\Http\Controllers;

class ErrorPageController extends Controller
{
    public function error404() { return view('errors.404'); }
    public function error500() { return view('errors.500'); }
    public function maintenance() { return view('errors.maintenance'); }
}
