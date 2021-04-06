<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table='shops';

    protected $primaryKey = "ShopID";
    protected $fillable=[
        'shop_name',
        'owner_name',
        'owner_NIC',
        'lat',
        'lng',
        'image',
        'address_no',
        'suburb',
        'city',
        'province',
        'country',
        'registered_date',
        'due_dates',
        //'telephone_numbers',
        'user_id',
        'user_name'

    ];

    public function users()
    {
        return $this->belongsTo(users::class,'user_id','userID');
    }
}
