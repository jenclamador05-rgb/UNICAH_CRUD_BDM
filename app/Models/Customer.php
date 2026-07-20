<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'dni',
        'first_name',
        'last_name',
        'phone',
        'email',
        'address',
        'status',
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
