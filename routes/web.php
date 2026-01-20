<?php

use App\Http\Controllers\DashboardMOMController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardMOMController::class, 'index'])->name('dashboard');

Route::get('/dashboard', [DashboardMOMController::class, 'index'])->name('dashboard.mom');
