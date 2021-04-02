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
        'user_id'
    ];

    public function shops(){
        return $this->hasMany(Shop::class, 'RouteID', 'RouteID');
    }
}
