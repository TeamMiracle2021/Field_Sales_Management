<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected$table='attendances';
    protected $primaryKey = 'attdnce_ID';
    protected $fillable=[
        'attdnce_ID',
        'check_in_time',
        'check_out_time',
        'user_id'

    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'userID');
    }
}
