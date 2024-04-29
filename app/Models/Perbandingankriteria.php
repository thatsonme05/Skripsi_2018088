<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbandingankriteria extends Model
{
    protected $table = 'perbandingan_kriteria';

    protected $fillable = ['kriteria1', 'kriteria2', 'nilai_perbandingan'];
}
