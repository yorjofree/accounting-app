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

// Create new record
Route::post('/new/record', function (Request $request) {
    $input = $request->input();
    DB::insert('insert into records (type, account, amount, description) values (?, ?, ?, ?)', 
                [$input['type'], 
                $input['account'], 
                $input['amount'], 
                $input['description']]
    );
    return response('record correctly inserted', 200);
})->name('newRecord');

// Read all records
Route::get('/get/records', function (Request $request) {
    $response = DB::select('select * from records');
    return response()->json($response);
})->name('getRecords');

// Update record
Route::put('/update/record', function (Request $request) {
    $id = $request->query('id');
    $input = $request->input();
    DB::update('update records set type = ?, account = ?, amount = ?, description = ? where id = ?', 
                [$input['type'],
                $input['account'],
                $input['amount'],
                $input['description'],
                $id]
    );
    return response('record updated', 200);
})->name('updateRecord');

// Delete record
Route::delete('/delete/record', function (Request $request) {
    $id = $request->query('id');
    DB::delete('delete from records where id = ?', [$id]);
    return response(200);
})->name('deleteRecord');
