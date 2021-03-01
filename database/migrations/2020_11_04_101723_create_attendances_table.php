<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('attdnce_ID');
            $table->dateTime('check_in_time');
            $table->dateTime('check_out_time');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('userID')->on('users');
            $table->timestamps();
        });

        DB::table('attendances')->insert([
            'check_in_time'=>'2021-03-10 18:52:31',
            'check_out_time'=>'2021-03-10 18:52:35',
            'user_id'=>'1'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
