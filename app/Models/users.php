<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable =
    [
        'username',
        'email_address',
        'password',
        'is_admin'
    ];

    public function belongsToManyTransactions()
    {
        return $this->belongsTo(transactions::class, 'user_id', 'id');
    }
}
