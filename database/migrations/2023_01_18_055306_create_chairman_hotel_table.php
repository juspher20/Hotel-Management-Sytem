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
        Schema::create('chairman_hotel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chairman_id');
            $table->unsignedBigInteger('hotel_id');
            $table->integer('total_employee');
            $table->integer('total_department');
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
        Schema::dropIfExists('chairman_hotel');
    }
};
