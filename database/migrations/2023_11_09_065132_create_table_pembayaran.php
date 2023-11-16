<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_pembayaran', function (Blueprint $table) {
            $table->integer('id_pembayaran')->autoIncrement();
            $table->integer('id_petugas');
            $table->string('nisn',25);
            $table->date('tgl_bayar');
            $table->string('bulan_bayar',9);
            $table->string('tahun_bayar',4);
            $table->integer('id_spp');
            $table->integer('jumlah_bayar');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('table_pembayaran');
    }
};
