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
        Schema::create('pengajuanktp_', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16)->unique();
            $table->string('nama', 100);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->text('alamat');
            $table->string('kelurahan', 50);
            $table->string('kecamatan', 50);
            $table->string('kota', 50);
            $table->string('agama', 20);
            $table->string('pekerjaan', 50);
            $table->enum('status_perkawinan', ['Belum Kawin', 'Kawin', 'Cerai']);
            $table->string('kewarganegaraan', 10);
            $table->date('tanggal_pengajuan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuanktp_');
    }
};
