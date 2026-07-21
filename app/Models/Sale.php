<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'customer_id', 'user_id', 'sale_date', 'subtotal', 'tax', 'total',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function details()
    {
        return $this->hasMany(SaleDetail::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
