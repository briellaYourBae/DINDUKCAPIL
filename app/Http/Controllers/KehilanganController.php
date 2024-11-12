<?php
namespace App\Http\Controllers;

use App\Models\KehilanganKtp;
use App\Models\PengajuanKtp;
use Illuminate\Http\Request;

class KehilanganController extends Controller
{
    // Menampilkan daftar laporan kehilangan KTP
    public function index()
    {
        $kehilanganKtp = KehilanganKtp::with('pengajuanKtp')->get();
        return view('kehilanganktp.index', compact('kehilanganKtp'));
    }

    // Menampilkan form laporan kehilangan KTP baru
    public function create()
    {
        $pengajuanKtp = PengajuanKtp::all(); // Untuk memilih NIK dari data pengajuan
        return view('kehilanganktp.create', compact('pengajuanKtp'));
    }

    // Menyimpan data laporan kehilangan KTP
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|exists:pengajuanktp,nik',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_laporan' => 'required|date',
            'lokasi_kehilangan' => 'required',
            'keterangan' => 'required',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        KehilanganKtp::create($request->all());

        return redirect()->route('kehilanganktp.index')
                         ->with('success', 'Laporan kehilangan KTP berhasil ditambahkan');
    }

    // Menampilkan detail laporan kehilangan KTP tertentu
    public function show($id)
    {
        $kehilanganKtp = KehilanganKtp::with('pengajuanKtp')->findOrFail($id);
        return view('kehilanganktp.show', compact('kehilanganKtp'));
    }

    // Menampilkan form edit laporan kehilangan KTP
    public function edit($id)
    {
        $kehilanganKtp = KehilanganKtp::findOrFail($id);
        $pengajuanKtp = PengajuanKtp::all();
        return view('kehilanganktp.edit', compact('kehilanganKtp', 'pengajuanKtp'));
    }

    // Memperbarui data laporan kehilangan KTP
    public function update(Request $request, $id)
    {
        $request->validate([
           'nik' => 'required|exists:pengajuanktp,nik',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_laporan' => 'required|date',
            'lokasi_kehilangan' => 'required',
            'keterangan' => 'required',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        $kehilanganKtp = KehilanganKtp::findOrFail($id);
        $kehilanganKtp->update($request->all());

        return redirect()->route('kehilanganktp.index')
                         ->with('success', 'Laporan kehilangan KTP berhasil diperbarui');
    }

    // Menghapus laporan kehilangan KTP
    public function destroy($id)
    {
        KehilanganKtp::destroy($id);

        return redirect()->route('kehilanganktp.index')
                         ->with('success', 'Laporan kehilangan KTP berhasil dihapus');
    }
}