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
        Schema::create('Setups', function (Blueprint $table) {
            $table->id('sid');
            $table->string('logo')->nullable();
            $table->string('title');
            $table->string('companyname');
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fblink')->nullable();
            $table->string('twlink')->nullable();
            $table->string('ytlink')->nullable();
            $table->string('lilink')->nullable();
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
        Schema::dropIfExists('Setups');
    }
};
