<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForecastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forecasts', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('country');
            $table->dateTime('localtime');
            $table->float('temp_c');
            $table->integer('humidity');
            $table->integer('cloud');
            $table->float('pressure_mb');
            $table->float('gust_kph');
            $table->float('vis_km');
            $table->float('wind_kph');
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
        Schema::dropIfExists('forecasts');
    }
}
