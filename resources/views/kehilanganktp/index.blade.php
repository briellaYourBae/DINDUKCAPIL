@extends('adminlte::page')
@section('title', 'Data Kehilangan')
@section('content_header')
    <h1 class="m-0 text-dark">Data Kehilangan</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <div class="mb-3">
        <a href="{{ route('kehilanganktp.create') }}" class="btn btn-primary">Data Kehilangan</a>
    </div>
    <!-- Form untuk mengunggah foto -->
    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="photo">Choose Photo:</label>
        <input type="file" name="photo" id="photo" required>
        <button type="submit">Upload</button>
    </form>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

</div>
@endsection