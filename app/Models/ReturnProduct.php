<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnProduct extends Model
{
    use HasFactory;
    protected $table='return_products';

    protected $fillable=[
        'OrderID',
        'product_ID',
        'quantity_per_product'

    ];
}
