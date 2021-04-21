<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $table='order_products';
//    protected $primaryKey = 'productID';
    protected $fillable=[
        'product_Name',

        'OrderID',
'product_ID',
'quantity_per_product',
'discount_per_product'

    ];
}
