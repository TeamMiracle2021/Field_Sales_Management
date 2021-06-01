<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'OrderID ';
    protected $fillable = [
        'OrderID',
        'placed_date',
        'bill_value',
        'discount',
        'user_id',
        'shop_ID'
    ];


    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'userID');
    }
}
