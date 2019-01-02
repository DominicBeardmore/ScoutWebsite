<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_table', function (Blueprint $table) {
            $table->increments('events_id');
            $table->string('event_title', 100);
            $table->string('event_location', 100)->nullable();
            $table->string('event_description', 100);
            $table->date('event_date')->nullable();
            $table->time('event_start_time')->nullable();
            $table->time('event_finish_time')->nullable();
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
        Schema::drop('events_table');
    }
}
