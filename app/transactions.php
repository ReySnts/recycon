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

    public function users()
    {
        return $this->hasMany(users::class);
    }

    public function items()
    {
        return $this->hasMany(items::class);
    }
}
