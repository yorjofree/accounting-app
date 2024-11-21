<?php

namespace App\Http\Controllers;

use App\Models\Payer;
use Illuminate\Http\Request;

class PayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Payer::all();
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
        $payer = new Payer;
        $payer->record_id = $request->record_id;
        $payer->surname = $request->surname;
        $payer->name = $request->name;
        $payer->save();
        return response('payer correctly inserted', 200);        
    }

    /**
     * Display the specified resource.
     */
    public function show(Payer $payer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payer $payer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payer $payer)
    {
        $payer->record_id = $request->record_id;
        $payer->surname = $request->surname;
        $payer->name = $request->name;
        $payer->save();
        return response('payer updated', 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payer $payer)
    {
        $payer->delete();
        return response(null, 200);
    }
}
