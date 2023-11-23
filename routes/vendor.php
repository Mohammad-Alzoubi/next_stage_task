<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/

/* Vendor Routes */
Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
