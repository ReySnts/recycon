<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;

    public function hasOneUser()
    {
        return $this->hasOne(users::class, 'id', 'user_id');
    }

    public function hasOneItem()
    {
        return $this->hasOne(items::class, 'id', 'item_id');
    }
}
