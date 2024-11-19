<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// GET di prova con JSON
Route::get('/', function () {
    return response()
            ->json([
                1 => "ciao",
                2 => "mondo",
                3 => "!"
            ]);
});

// GET di prova con stringa
Route::get('/home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});

Route::post('/new/record', function (Request $request) {
    DB::insert('insert into records (type, account, amount, description) values (?, ?, ?, ?)', 
                [$request->all()['type'], 
                $request->all()['account'], 
                $request->all()['amount'], 
                $request->all()['description']]
    );
    return response('record correctly inserted', 200);
})->name('newRecord');
