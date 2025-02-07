<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = ['kode', 'nama', 'pengarang', 'penerbit', 'tahun_terbit', 'image'];
}
