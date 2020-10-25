<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMushroomsTable extends Migration
{
    public function up()
    {
        Schema::create('mushrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->string('type')->nullable();
            $table->float('height');
            $table->string('arial')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mushrooms');
    }
}
