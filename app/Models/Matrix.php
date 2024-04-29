<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrix extends Model
{

    protected $fillable = [
        'Harga', // Tambahkan atribut Harga ke dalam properti fillable
    ];

    public static function calculateResultMatrix(array $bobotRelatif): array
    {
        // Logika perhitungan matriks
        // ...
    }

    public static function calculateConsistency(array $resultMatrix): array
    {
        // Logika perhitungan konsistensi
        // ...
    }

    public static function calculateConsistencyRatio(array $resultMatrix): float
    {
        // Logika perhitungan rasio konsistensi
        // ...
    }
}