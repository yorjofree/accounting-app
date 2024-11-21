<?php

namespace App\Http\Controllers;

use App\Models\Payer;

class RecordFromPayerController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Payer $payer)
    {
        $record = $payer->record;
        return response()->json($record);
    }
}
