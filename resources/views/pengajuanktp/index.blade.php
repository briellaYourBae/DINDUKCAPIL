@extends('adminlte::page')
@section('title', 'Data Pengajuan')
@section('content_header')
    <h1 class="m-0 text-dark">Data Pengajuan</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <div class="mb-3">
        <a href="{{ route('pengajuanktp.create') }}" class="btn btn-primary">Tambah Pengajuan KTP</a>
    </div>

    
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengajuanKtp as $index => $pengajuan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $pengajuan->nik }}</td>
                    <td>{{ $pengajuan->nama }}</td>
                    <td>{{ $pengajuan->tempat_lahir }}</td>
                    <td>{{ $pengajuan->tanggal_lahir }}</td>
                    <td>{{ $pengajuan->jenis_kelamin }}</td>
                    <td>{{ $pengajuan->alamat }}</td>
                    <td>{{ $pengajuan->kota }}</td>
                    <td>{{ $pengajuan->tanggal_pengajuan }}</td>
                    <td>
                        <a href="{{ route('pengajuanktp.show', $pengajuan->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('pengajuanktp.edit', $pengajuan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pengajuanktp.destroy', $pengajuan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection