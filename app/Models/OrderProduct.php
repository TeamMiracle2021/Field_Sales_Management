<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $table='order_products';

    protected $fillable=[
        'OrderID',
        'product_ID',
        'quantity_per_product',
        'discount_per_product'

    ];
}
