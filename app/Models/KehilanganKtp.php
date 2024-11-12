<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KehilanganKtp extends Model
{
    use HasFactory;

    protected $table = 'kehilanganktp';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nik', 'nama', 'alamat', 'tanggal_laporan', 'lokasi_kehilangan', 'keterangan'
    ];

    // Relasi many-to-one dengan PengajuanKtp
    public function pengajuanKtp()
    {
        return $this->belongsTo(PengajuanKtp::class, 'nik', 'nik');
    }
}
