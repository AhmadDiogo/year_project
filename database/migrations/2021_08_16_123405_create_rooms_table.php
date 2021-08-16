<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->string('room_type');
            $table->string('room_description');
            $table->integer('room_price');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('number_beds');
            $table->integer('number_bathrooms');
            $table->integer('number_guests');
            $table->string('room_availability');
            $table->string('room_pictures');

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
        Schema::dropIfExists('rooms');
    }
}
