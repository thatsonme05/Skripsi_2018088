<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handphone extends Model
{
    protected $table = 'handphone'; // Menentukan nama tabel yang digunakan oleh model
    protected $fillable = [
        'brand',
        'harga',
        'ram',
        'kapasitas_batrei',
        'tampilan_layar',
        'kamera',
        'chipset',
        'memori'
    ];
}
