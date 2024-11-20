<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Record;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Record::all();
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
        // $input = $request->input();
        $record = new Record;
        $record->type = $request->type;
        $record->account = $request->account;
        $record->amount = $request->amount;
        $record->description = $request->description;
        $record->save();
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
        // $input = $request->input();
        $record = Record::find($id);
        $record->type = $request->type;
        $record->account = $request->account;
        $record->amount = $request->amount;
        $record->description = $request->description;
        $record->save();
        return response('record updated', 200);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = Record::find($id);
        $record->delete();
        return response(null, 200);
    }
}
