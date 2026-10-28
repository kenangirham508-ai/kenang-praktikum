<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminTabelController;
use App\Http\Controllers\AdminEcommerceController;
use App\Http\Controllers\AdminChartsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/movies', [MovieController::class, 'index'])->name('movies');

Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/tabel', [AdminTabelController::class, 'index'])->name('admin.tabel');

Route::get('/admin/ecommerce', [AdminEcommerceController::class, 'index'])->name('admin.ecommerce');

Route::get('/admin/charts', [AdminChartsController::class, 'index'])->name('admin.charts');
