<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'userID';
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'NIC',
        'Address',
        'Gender',
        'Date_Of_Birth',
        'telephone_numbers',
        'email',
        'username',
        'password',
        'branch_name',
        'approvel_state',
        'user_typeID',
        'vehicle_ID'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function shops() {
        return $this->hasMany(Shop::class, 'user_id', 'userID');
    }


    public function route() {
        return $this->hasMany(Route::class, 'user_id', 'userID');
    }

    public function product() {
        return $this->hasMany(Route::class, 'user_id', 'userID');
    }

    public function att() {
        return $this->hasMany(Attendance::class, 'user_id', 'userID');
    }

    public function orders() {
        return $this->hasMany(Attendance::class, 'user_id', 'userID');
    }

    public function vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_ID', 'vehicle_ID');
    }

}
