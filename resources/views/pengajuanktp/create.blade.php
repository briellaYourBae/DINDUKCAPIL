@extends('layouts.app')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah User</h1>
@stop

@section('content')
    <form action="{{route('pengajuanktp.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

        <div class="from-grup">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" name="nik" id="nik" class="form-control" required>
        </div>

       
        <div class="from-grup">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

       
        <div class="from-grup">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
        </div>

       
        <div class="from-grup">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
        </div>

      
                
        <div class="from-grup">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>


       
        <div class="from-grup">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
        </div>

     
        <div class="from-grup">
            <label for="kelurahan" class="form-label">Kelurahan</label>
            <input type="text" name="kelurahan" id="kelurahan" class="form-control" required>
        </div>

     
        <div class="from-grup">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="text" name="kecamatan" id="kecamatan" class="form-control" required>
        </div>

       
        <div class="from-grup">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" name="kota" id="kota" class="form-control" required>
        </div>

        
        <div class="from-grup">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" name="agama" id="agama" class="form-control" required>
        </div>

      
        <div class="from-grup">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" required>
        </div>

        
        <div class="from-grup">
            <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
            <select name="status_perkawinan" id="status_perkawinan" class="form-control" required>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Cerai">Cerai</option>
            </select>
        </div>

        <div class="from-grup">
            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
            <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
        </div>

        <div class="from-grup">
            <label for="tanggal_pengajuan" class="form-label">Tanggal Pengajuan</label>
            <input type="date" name="tanggal_pengajuan" id="tanggal_pengajuan" class="form-control" required>
        </div>

     
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pengajuanktp.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@stop


