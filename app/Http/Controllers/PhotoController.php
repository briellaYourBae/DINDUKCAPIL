<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        // Cek apakah ada file yang diunggah
        if ($request->hasFile('photo')) {
            // Simpan file ke storage/app/public/images dan dapatkan path relatifnya
            $path = $request->file('photo')->store('images', 'public');
        } else {
            // Jika tidak ada file yang diunggah, gunakan gambar default
            $path = 'images/default.jpg';
        }

        // Simpan path di database
        $photo = new Photo();
        $photo->photo = $path; // Simpan path relatif
        $photo->created_by = \Auth::user()->name;
        $photo->save();

        return redirect()->back()->with('success', 'Photo uploaded successfully');
    }

    // Method untuk menampilkan foto
    public function index()
    {
        $photos = Photo::all(); // Ambil semua foto dari database
        return view('photos.index', compact('photos'));
    }
}