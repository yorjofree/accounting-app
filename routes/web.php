<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RecordController;

// Routing to RecordController
Route::resource('records', RecordController::class);
