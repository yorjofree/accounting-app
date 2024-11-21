<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\PayerController;
use App\Http\Controllers\PayersFromRecordController;
use App\Http\Controllers\RecordFromPayerController;

// Route to RecordController
Route::resource('records', RecordController::class);

// Route to PayerController
Route::resource('payers', PayerController::class);

// Get payers from record
Route::get('payers/from/record/{record}', PayersFromRecordController::class);

// Get record from payer
Route::get('record/from/payer/{payer}', RecordFromPayerController::class);
