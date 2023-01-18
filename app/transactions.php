<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $primarykey = 'id';
    protected $fillable =
    [
        'user_id',
        'item_id',
        'password',
        'is_admin',
        'quantity',

    ];


    public function items()
    {
        return $this->belongsToMany(items::class);
    }

    public function users()
    {
        return $this->belongsToMany(transactions::class);
    }
}
