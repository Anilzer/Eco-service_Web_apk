<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'total_amount', 'shipping_address', 'status'
    ];

    public function items()
    {
        return $this->hasMany(Orders_Item::class);
    }
}
