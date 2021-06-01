<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $table ='routes';
    protected $primaryKey='RouteID';
    protected $fillable=[
        'RouteID',
        'route_name',
        'start_lat',
        'start_lng',
        'end_lat',
        'end_lng',
        'due_dates',
        'user_id'
    ];

    protected $dates = ['first_date'];

    public function shops(){
        return $this->hasMany(Shop::class, 'RouteID', 'RouteID');
    }



    public function shedules(){
        return $this->hasMany(RouteShedules::class, 'RouteID', 'RouteID');
    }



    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'userID');
    }
}
