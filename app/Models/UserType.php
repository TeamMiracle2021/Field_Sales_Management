<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserType extends Model
{
    use HasFactory;
    protected $table = "usertypes";
    protected $primaryKey = 'user_typeID';
    protected $fillable = [
        'user_type_name'
    ];


    public static function insertData($data){

        $value=DB::table('usertypes')->where('user_type_name', $data['user_type_name'])->get();
        if($value->count() == 0){
            DB::table('usertypes')->insert($data);
        }
    }

}
