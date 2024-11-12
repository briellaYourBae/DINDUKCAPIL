<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    // Define the fillable fields
    protected $fillable = [
        'photo', // Stores the photo filename
        'created_by', // Stores the user who uploaded the photo
    ];

    protected $table = 'photos';

    // Example: Define a relationship (optional, if you have related models)
    
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}