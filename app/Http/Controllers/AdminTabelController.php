<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTabelController extends Controller
{
    public function index()
    {
        return view('admin.tabel');
    }
}
