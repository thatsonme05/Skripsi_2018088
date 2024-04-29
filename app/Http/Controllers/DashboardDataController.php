<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DashboardDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Data::all();
        return view('dashboard.data.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kriteria' => 'required'
            // Tambahkan validasi untuk kolom-kolom lainnya jika diperlukan
        ]);

        // Membuat instance model Data dan menyimpan data ke dalam database
        $data = new Data();
        $data->kriteria = $request->input('kriteria');

        // Tambahkan penyimpanan untuk kolom-kolom lainnya sesuai kebutuhan
        $data->save();

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('data.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data $data)
    {
        //
    }
}
