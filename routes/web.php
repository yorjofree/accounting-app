<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\PayerController;

// Route to RecordController
Route::resource('records', RecordController::class);

// Route to PayerController
Route::resource('payers', PayerController::class);
