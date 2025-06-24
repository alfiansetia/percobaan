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
        Schema::create('nilai_muatan_lokals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->string('kelas')->default('1A');
            $table->integer('nilai_1')->nullable();
            $table->integer('nilai_2')->nullable();
            $table->integer('nilai_3')->nullable();
            $table->integer('nilai_4')->nullable();
            $table->integer('nilai_5')->nullable();
            $table->integer('nilai_6')->nullable();
            $table->integer('nilai_7')->nullable();
            $table->integer('nilai_8')->nullable();
            $table->integer('nilai_9')->nullable();
            $table->integer('nilai_10')->nullable();
            $table->integer('nilai_11')->nullable();
            $table->integer('nilai_12')->nullable();
            $table->integer('jumlah_nilai')->default(0);
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_muatan_lokals');
    }
};
