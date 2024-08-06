<?php

use App\Http\Controllers\PrintController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('user');})->name('user');
Route::post('/', [TransactionController::class, 'store'])->name('user');
Route::get('/print', [TransactionController::class, 'print'])->name('print');

