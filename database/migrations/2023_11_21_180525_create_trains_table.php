<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            // id
            $table->id();
            // train
            $table->string('company', 50)->nullable();
            $table->smallInteger('train_code')->unsigned()->unique();
            // station
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            // time
            $table->time('departure_time');
            $table->time('arrival_time');
            // state
            $table->boolean('is_on_time')->default(true);
            $table->boolean('is_cancelled')->default(false);
            // other
            $table->tinyInteger('carriages')->unsigned()->nullable();
            // timestamp
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
        Schema::dropIfExists('trains');
    }
};
