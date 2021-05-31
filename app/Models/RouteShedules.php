<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteShedules extends Model
{
    use HasFactory;
    protected $table ='route_shedules';

    protected $fillable=[
        'RouteID',
        'date_of_Shedule'
    ];

    public function routes(){
        return $this->belongsTo(Route::class, 'RouteID', 'RouteID');
    }




}
