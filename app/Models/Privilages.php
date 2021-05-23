<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilages extends Model
{
    use HasFactory;
    protected$table='privilages';
    protected $primaryKey = 'privilageID';
    protected $fillable=[
        'privilageID',
        'privilage_name'

    ];
}
