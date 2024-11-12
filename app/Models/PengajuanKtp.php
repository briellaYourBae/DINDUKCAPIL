<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanKtp extends Model
{
    use HasFactory;
    protected $table = 'pengajuanktp';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 
        'kelurahan', 'kecamatan', 'kota', 'agama', 'pekerjaan', 'status_perkawinan', 
        'kewarganegaraan', 'tanggal_pengajuan'
    ];

    // Relasi one-to-many dengan KehilanganKtp
    public function kehilanganKtp()
    {
        return $this->hasMany(KehilanganKtp::class, 'nik', 'nik');
    }
}