<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Bhagya',
            'middle_name' => 'Sewwandi',
            'last_name' => 'Aththanayaka',
            'NIC' => '977698765V',
            'Address' => 'No:51,Neluwagala',
            'telephone_number' => '0766789876',
            'Gender' => 'Female',
            'Date_Of_Birth' => '1997-09-25',
            'email' => 'bhagya00sewwandi@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('BHa#1006'),
            'branch_name' => 'Wellawaya',
            'user_typeID' =>"1"
            

        ]);
    }
}
