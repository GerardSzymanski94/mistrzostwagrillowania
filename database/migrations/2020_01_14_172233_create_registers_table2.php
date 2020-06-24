<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('street')->nullable();
            $table->string('postal')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('account')->nullable();
            $table->string('data')->nullable();
            $table->string('value')->nullable();
            $table->string('paragon')->nullable();
            $table->string('paragonimg')->nullable();
            $table->integer('status')->default(0);
            $table->integer('new')->default(1);
            $table->string('ownvalue')->default('0');
            $table->boolean('reject')->nullable();
            $table->integer('export')->nullable();
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
        Schema::dropIfExists('registers');
    }
}
