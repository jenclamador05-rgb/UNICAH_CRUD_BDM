<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $fillable = [
        'position_id',
        'user_id',
        'dni',
        'first_name',
        'last_name',
        'phone',
        'email',
        'address',
        'birth_date',
        'salary',
        'status',
    ];

    public function position()
    {
        return $this->belongsTo(EmployeePosition::class, 'position_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
