<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unproductive extends Model
{
    use HasFactory;
    protected $table ='shop_unproductives';
    protected $primaryKey='unproductiveID';
    protected $fillable=[
        'unproductiveID',
        'unproductive_reason',
        'unproductive_date',
        'shop_ID'
    ];

    public function shop(){
        return $this->belongsTo(Shop::class, 'shop_ID', 'Shop_ID');
    }
}
