<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bakus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_vendor');
            $table->string('jenis_bahan_baku');
            $table->string('nama_bahan_baku');
            $table->integer('harga_bahan_baku');
            $table->integer('jumlah_bahan_baku');
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
        Schema::dropIfExists('bakus');
    }
}
