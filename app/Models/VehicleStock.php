<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleStock extends Model
{
    use HasFactory;

    protected $table = "vehicle_stock";
    protected $primaryKey='stock_id';
    protected $fillable = [
        'user_id',
        'product_ID',
        'quantity_per_product'
    ];
}
