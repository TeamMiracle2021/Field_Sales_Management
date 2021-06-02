<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;


    protected $table ='vehicles';
    protected $primaryKey='vehicle_ID';
    protected $fillable=[
        'vehicle_ID',
        'vehicle_no',
        'capacity',
        'description'
    ];



    public function users(){
        return $this->hasMany(User::class, 'user_id', 'userID');
    }
}
