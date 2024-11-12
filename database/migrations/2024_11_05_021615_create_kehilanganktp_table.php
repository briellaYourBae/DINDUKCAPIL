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
        Schema::create('kehilanganktp', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16);
            $table->string('nama', 100);
            $table->text('alamat');
            $table->date('tanggal_laporan');
            $table->string('lokasi_kehilangan', 100);
            $table->text('keterangan')->nullable();

            // Relasi ke tabel pengajuan_ktp
            $table->foreign('nik')->references('nik')->on('pengajuanktp')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehilanganktp');
    }
};
