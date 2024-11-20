<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = DB::select('select * from records');
        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->input();
        DB::insert('insert into records (type, account, amount, description) values (?, ?, ?, ?)', 
            [$input['type'], 
            $input['account'], 
            $input['amount'], 
            $input['description']]
        );
        return response('record correctly inserted', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->input();
        DB::update('update records set type = ?, account = ?, amount = ?, description = ? where id = ?', 
            [$input['type'],
            $input['account'],
            $input['amount'],
            $input['description'],
            $id]
        );
        return response('record updated', 200);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::delete('delete from records where id = ?', [$id]);
        return response(200);
    }
}
