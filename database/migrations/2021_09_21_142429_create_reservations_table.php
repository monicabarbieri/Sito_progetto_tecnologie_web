<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->integer('people');
            $table->date('date');
            $table->time('time');
            $table->enum('green_pass',['yes', 'no']); 

            $table->integer('meat_menu');
            $table->integer('fish_menu');
            $table->integer('vegetarian_menu');
            $table->integer('vegan_menu');
            $table->integer('child_menu');

            $table->string('request')->nullable($value = true);   

            $table->timestamps();
        
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
		
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
