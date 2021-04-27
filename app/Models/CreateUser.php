<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Model
{
    use HasFactory;

    protected $table='users';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'NIC',
        'Address',
        'telephone_number',
        'Gender',
        'Date_Of_Birth',
        'branch_name',
        'user_typeID',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'Date_Of_Birth'
        ];

    protected $primaryKey = 'userID';


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user','role_id','user_id');
    }

}

