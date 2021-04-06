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
            $table->decimal('lat',16,14)->nullable();
            $table->decimal('lng',16,14)->nullable();
            $table->string('image')->nullable();
            $table->string('address_no');
            $table->string('suburb');
            $table->string('city');
            $table->string('province');
            $table->string('country')->nullable();
            $table->integer('telephone_numbers');
            $table->datetime('registered_date')->nullable();
            $table->integer('due_dates')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('userID')->on('users');
            $table->unsignedBigInteger('RouteID')->nullable();
            $table->foreign('RouteID')->references('RouteID')->on('routes');
            $table->timestamps();
        });



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
