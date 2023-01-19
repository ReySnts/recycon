<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;

    public function belongsToManyTransactions()
    {
        return $this->belongsTo(transactions::class, 'item_id', 'id');
    }
}
