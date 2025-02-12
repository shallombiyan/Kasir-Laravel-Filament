<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika sesuai dengan konvensi Laravel)
    protected $table = 'kategoris';

    // Kolom yang dapat diisi
    protected $fillable = [
        'name',
    ];
}
