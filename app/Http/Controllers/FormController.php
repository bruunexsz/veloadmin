<?php

namespace App\Http\Controllers;

class FormController extends Controller
{
    public function basic() { return view('forms.basic'); }
    public function validation() { return view('forms.validation'); }
    public function fileUpload() { return view('forms.file-upload'); }
}
