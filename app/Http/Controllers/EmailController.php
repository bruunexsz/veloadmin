<?php

namespace App\Http\Controllers;

class EmailController extends Controller
{
    public function welcome() { return view('email.welcome'); }
    public function invoice() { return view('email.invoice'); }
    public function reset() { return view('email.reset'); }
}
