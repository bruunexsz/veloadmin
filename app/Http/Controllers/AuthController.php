<?php

namespace App\Http\Controllers;

/**
 * Auth Controller
 * Handles authentication page views (template pages only, no real auth logic)
 */
class AuthController extends Controller
{
    public function login() { return view('auth.login'); }
    public function register() { return view('auth.register'); }
    public function forgotPassword() { return view('auth.forgot-password'); }
    public function lockScreen() { return view('auth.lock-screen'); }
}
