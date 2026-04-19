<?php

namespace App\Http\Controllers;

class TableController extends Controller
{
    public function basic() { return view('tables.basic'); }
    public function datatables() { return view('tables.datatables'); }
}
