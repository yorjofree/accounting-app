<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Record extends Model
{
    public function payers(): HasMany {
        return $this->hasMany(Payer::class);
    }
}
