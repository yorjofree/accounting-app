<?php

namespace App\Http\Controllers;

use App\Models\Record;

class PayersFromRecordController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Record $record)
    {
        $payers = $record->payers;
        return response()->json($payers);
    }
}
