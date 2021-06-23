<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirplaneTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airplane_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city_origin',255);
            $table->string('destination_city',255);
            $table->timestamp('date_flight')->useCurrent();
            $table->timestamp('return_date')->useCurrent();
            $table->integer('scalas_number')->default(0);
            $table->integer('flight_duration')->default(0);
            $table->decimal('price', 18,2)->default(0.00);
            $table->integer('flight_id')->unsigned();
            $table->foreign('flight_id')
                      ->references('id')
                      ->on('flights')
                      ->onDelete('restrict')
                      ->onUpdate('restrict');
            $table->index('city_origin');
            $table->index('price');
            $table->timestamps();
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('airplane_tickets');
    }
}

