<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->bigIncrements('RouteID');
            $table->string('route_name');
//            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('userID')->on('users');
//            $table->unsignedBigInteger('shop_ID');
//            $table->foreign('shop_ID')->references('ShopID')->on('shops');
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
        Schema::dropIfExists('routes');
    }
}
