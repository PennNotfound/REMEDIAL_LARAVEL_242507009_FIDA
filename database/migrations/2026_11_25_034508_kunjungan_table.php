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
        Schema::create('kunjungan',function(Blueprint $table)
        {
            $table->integer('id_kunjungan');
            $table->string('nama_pasien');
            $table->string('no_telepon');
            $table->text('keluhan');
            $table->date('tanggal_kunjungan');
            $table->enum('status' ,['Menunggu', 'Selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
