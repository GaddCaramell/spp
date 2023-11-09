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
        Schema::create('table_siswa', function (Blueprint $table) {
            $table->char('nisn', 10);
            $table->char('nis',8);
            $table->string('nama',35);
            $table->integer('id_kelas',11);
            $table->text('alamat');
            $table->string('no_telp',13);
            $table->string('id_spp',11);
            $table->timestamps();
            $table->primary('nisn');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('table_siswa');
    }
};
