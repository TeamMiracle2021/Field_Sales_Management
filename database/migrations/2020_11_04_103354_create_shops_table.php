<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('ShopID');
            $table->string('shop_name');
            $table->string('owner_name');
            $table->string('owner_NIC');
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->string('image')->nullable();
            $table->string('address_no');
            $table->string('suburb');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->datetime('registered_date');
            $table->integer('due_dates')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('userID')->on('users');
            $table->timestamps();
        });

        DB::table('shops')->insert([
            'shop_name'=>'Asiri Stores',
            'owner_name'=>'Mr.Kasun Asiri',
            'owner_NIC'=>'451236987V',
            'lng'=>'7.4279931188932675',
            'lat'=>'79.92221698419246',
            'image'=>'www.dd',
            'address_no'=>'456/2',
            'suburb'=>'Mihindu mawatha',
            'city'=>'kuliyapitiya',
            'province'=>'north western province',
            'country'=>'Sri lanka',
            'registered_date'=>'2015-10-25',
            'due_dates'=>'15',
            'user_id'=>'1',

        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
