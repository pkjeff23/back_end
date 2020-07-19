<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direction');
            $table->unsignedInteger('city_id');
            $table->string('phone');
            $table->string('code');
            $table->unsignedInteger('type_id');
            $table->string('price');
            $table->timestamps();
        });

        Schema::table('property', function ($table) {
            $table->foreign('city_id')->references('id')->on('city');
            $table->foreign('type_id')->references('id')->on('type');
        });
    }

    public function down()
    {
        Schema::dropIfExists('property');
    }
}
