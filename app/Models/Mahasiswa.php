<?php

namespace App\Models;

// --- BARIS PENTING YANG HILANG ---
use Illuminate\Database\Eloquent\Factories\HasFactory;
// ---------------------------------
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // Pastikan ini ada setelah di-import di atas
    use HasFactory;
    
    protected $fillable = [
        'nim', 
        'nama', 
        'jurusan',
    ];
}