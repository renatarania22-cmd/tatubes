<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmartResidentController;

Route::get('/', [SmartResidentController::class, 'dashboard'])->name('dashboard');
Route::get('/laporan', [SmartResidentController::class, 'index'])->name('laporan.index');