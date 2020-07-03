<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanDanJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama penanya');
            $table->int('id penanya');
            $table->string('pertanyaan');
            $table->string('nama penjawab')->nullable();
            $table->int('id penjawab')->nullable();
            $table->string('jawaban')->nullable();
            $table->int('jumlah like')->nullable();
            $table->int('jumlah dislike')->nullable();
            $table->bool('vote')->nullable();
            $table->int('jumlah vote')->nullable;
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
        Schema::dropIfExists('pertanyaan_dan_jawaban');
    }
}
