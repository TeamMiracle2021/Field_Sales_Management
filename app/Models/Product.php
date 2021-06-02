<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    use HasFactory;
    protected$table='products';
    protected $primaryKey = 'productID';
    protected $fillable=[
        'product_Name',
        'cost_price',
        'sales_price',
        'labled_price',
        'weight',
        'qty',
        'user_id',
        'category_id'

    ];



    public static function insertData($data){

        $value=DB::table('products')->where('product_Name', $data['product_Name'])->get();
        if($value->count() == 0){
            DB::table('products')->insert($data);
        }
    }




    public function categories(){
        return $this->belongsTo(Category::class, 'category_id', 'categoryID');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'userID');
    }


}

