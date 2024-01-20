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
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat', 25);
            $table->string('kode', 8);
            $table->string('dosis', 20);
            $table->string('indikasi', 55);
            $table->unsignedBigInteger('nama_kategori');
            $table->foreign('nama_kategori')->references('id')->on('kategoris')->onDelete('cascade');
            $table->unsignedBigInteger('nama_satuan');
            $table->foreign('nama_satuan')->references('id')->on('satuans')->onDelete('cascade');
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
        Schema::dropIfExists('obats');
    }
};
