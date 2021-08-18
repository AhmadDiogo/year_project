<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer("room_id");
            $table->string("name");
            $table->string("surname");
            $table->string("email");
            $table->dateTime("from_date");
            $table->dateTime('to_date');
            $table->integer('number_guests');
            $table->string('phone_number');
            $table->string('address');
            $table->string('city');
            $table->longText('special_requests')->nullable();
            $table->string('name_on_card');
            $table->string('card_number');
            $table->string('cvc');
            $table->boolean('cancelation_status')->nullable();


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
        Schema::dropIfExists('bookings');
    }
}
