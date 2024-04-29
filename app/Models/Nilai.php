<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai'; // Menentukan nama tabel yang digunakan oleh model
    
    protected $fillable = ['kriteria1', 'kriteria2', 'comparison'];
}
