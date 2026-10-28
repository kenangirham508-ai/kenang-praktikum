<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminChartsController extends Controller
{
    public function index()
    {
        return view('admin.charts');
    }
}
