<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_outlet')->unsigned();
            $table->integer('id_paket')->unsigned();
            $table->enum('status_pesanan', ['diproses','selesai'])->default('diproses');
            $table->enum('status_pembayaran', ['lunas','belum lunas'])->default('belum lunas');
            $table->date('tanggal_pemesanan');
            $table->timestamps();

            $table->foreign('id_paket')->references('id')->on('paket')->onDelete('cascade');
            $table->foreign('id_outlet')->references('id')->on('outlet')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
