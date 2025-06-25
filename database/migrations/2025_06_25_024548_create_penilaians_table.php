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
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id();
            $table->string('class_code');
            $table->string('mapel_code');
            $table->string('name')->nullable();
            $table->integer('nilai1')->default(0);
            $table->integer('nilai2')->default(0);
            $table->integer('nilai3')->default(0);
            $table->integer('nilai4')->default(0);
            $table->integer('nilai5')->default(0);
            $table->integer('nilai6')->default(0);
            $table->integer('nilai7')->default(0);
            $table->integer('nilai8')->default(0);
            $table->integer('nilai9')->default(0);
            $table->integer('nilai10')->default(0);
            $table->integer('nilai11')->default(0);
            $table->integer('nilai12')->default(0);
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
        Schema::dropIfExists('penilaian');
    }
};
