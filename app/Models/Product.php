<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected$table='products';
    protected $primaryKey = 'productID';
    protected $fillable=[
        'product_Name',  //ProductControler ekeeta gaththa data tika data base ekee save kara gannawa
        'cost_price',
        'sales_price',
        'labled_price',
        'weight',
        'Expire_date',
        //'user_id',
        'category_id'
    
    ];
}
