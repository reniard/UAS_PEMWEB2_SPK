<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'alternatif'; // Sesuaikan nama tabel di sini
    protected $fillable = ['nama_alternatif', 'nilai_c1', 'nilai_c2', 'nilai_c3', 'nilai_c4', 'nilai_c5']; // Sesuaikan kolom-kolom yang bisa diisi di sini
}
