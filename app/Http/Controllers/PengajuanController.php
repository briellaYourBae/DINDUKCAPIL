<?php
namespace App\Http\Controllers;

use App\Models\PengajuanKtp;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    // Menampilkan daftar pengajuan KTP
    public function index()
    {
        $pengajuanKtp = PengajuanKtp::all();
        return view('pengajuanktp.index', compact('pengajuanKtp'));
    }

    // Menampilkan form pengajuan KTP baru
    public function create()
    {
        return view('pengajuanktp.create');
    }

    // Menyimpan data pengajuan KTP baru
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:pengajuanktp,nik,',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki, Perempuan',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'status_perkawinan' => 'required',
            'kewarganegaraan' => 'required',
            'tanggal_pengajuan' => 'required',

            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        PengajuanKtp::create($request->all());

        return redirect()->route('pengajuanktp.index')
                         ->with('success', 'Pengajuan KTP berhasil ditambahkan');
    }

    // Menampilkan detail pengajuan KTP tertentu
    public function show($id)
    {
        $pengajuanKtp = PengajuanKtp::findOrFail($id);
        return view('pengajuanktp.show', compact('pengajuanKtp'));
    }

    // Menampilkan form edit pengajuan KTP
    public function edit($id)
    {
        $pengajuanKtp = PengajuanKtp::findOrFail($id);
        return view('pengajuanktp.edit', compact('pengajuanKtp'));
    }

    // Memperbarui data pengajuan KTP
    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required|unique:pengajuanktp,nik,',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'status_perkawinan' => 'required',
            'kewarganegaraan' => 'required',
            'tanggal_pengajuan' => 'required',

            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        $pengajuanKtp = PengajuanKtp::findOrFail($id);
        $pengajuanKtp->update($request->all());

        return redirect()->route('pengajuanktp.index')
                         ->with('success', 'Pengajuan KTP berhasil diperbarui');
    }

    // Menghapus pengajuan KTP
    public function destroy($id)
    {
        PengajuanKtp::destroy($id);

        return redirect()->route('pengajuanktp.index')
                         ->with('success', 'Pengajuan KTP berhasil dihapus');
    }
}