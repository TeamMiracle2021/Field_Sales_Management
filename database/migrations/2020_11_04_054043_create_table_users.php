<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('userID');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('NIC');
            $table->string('Address');
            $table->string('Gender');
            $table->date('Date_Of_Birth');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('branch_name');
            $table->boolean('approvel_state');
            $table->unsignedBigInteger('user_typeID');
            $table->foreign('user_typeID')->references('user_typeID')->on('usertypes');
            $table->timestamps();
        });

        DB::table('users')->insert([
            'first_name'=>'Nirmala',
            'middle_name'=>'Dinujaya',
            'last_name'=>'Disanayaka',
            'NIC'=>'972802522V',
            'Address'=>'Welipennagahamulla',
            'Gender'=>'Male',
            'Date_Of_Birth'=>'1997-10-06',
            'email'=>'ndisanayaka1997@gmail.com',
            'username'=>'dinu123',
            'password'=>'dinu321',
            'branch_name'=>'Kuliyapitiya',
            'approvel_state'=>'1',
            'user_typeID'=>'1'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
