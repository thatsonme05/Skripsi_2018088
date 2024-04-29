<?php

namespace App\Http\Controllers;

use App\Models\Hitung;
use Illuminate\Http\Request;

class DashboardHitungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hitung = Hitung::all();
        return view('dashboard.hitung.index', ['hitung' => $hitung]);
    }


    public function calculate()
    {
        // Ambil semua data hitung antar kriteria
        $hitung = Hitung::all();

        // Lakukan perhitungan bobot relatif
        $total = $hitung->sum('nilai_perbandingan');
        $bobot = $hitung->map(function ($hitung) use ($total) {
            return [
                'nama_kriteria' => $hitung->nama_kriteria,
                'bobot' => $hitung->nilai_perbandingan / $total,
            ];
        });

        // Tampilkan halaman hasil perhitungan beserta data bobot
        return view('dashboard.hitung.index', compact('bobot'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan dari formulir
        $request->validate([
            'nama_kriteria' => 'required|string',
            'nilai_perbandingan' => 'required|numeric',
        ]);

        // Simpan data hitung antar kriteria ke dalam database
        Hitung::create([
            'nama_kriteria' => $request->nama_kriteria,
            'nilai_perbandingan' => $request->nilai_perbandingan,
        ]);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('hitung.index')->with('success', 'Data perbandingan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hitung $hitung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hitung $hitung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hitung $hitung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hitung $hitung)
    {
        //
    }
}
