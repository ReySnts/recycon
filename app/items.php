<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $primarykey = 'id';
    protected $fillable =
    [
        'name',
        'price',
        'description',
        'image',
        'category'
    ];

    public function users()
    {
        return $this->hasMany(users::class);
    }
}
