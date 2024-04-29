<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use Illuminate\Http\Request;

class DashboardHandphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $handphone = Handphone::all();
        return view('dashboard.handphone.index', ['handphone' => $handphone]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.handphone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string',
            'harga' => 'required|numeric',
            'ram' => 'required|integer',
            'kapasitas_batrei' => 'required|integer',
            'tampilan_layar' => 'required|numeric',
            'chipset' => 'required|string',
            'memori' => 'required|integer',
            'kamera' => 'required|numeric',
        ]);

        $handphone = new Handphone();
        $handphone->brand = $request->input('brand');
        $handphone->ram = $request->input('ram');
        $handphone->harga = $request->input('harga');
        $handphone->kapasitas_batrei = $request->input('kapasitas_batrei');
        $handphone->tampilan_layar = $request->input('tampilan_layar');
        $handphone->chipset = $request->input('chipset');
        $handphone->memori = $request->input('memori');
        $handphone->kamera = $request->input('kamera');

        $handphone->save();

        return redirect()->route('handphone.index')->with('success', 'Handphone berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Handphone $handphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Handphone $handphone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Handphone $handphone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Handphone $handphone)
    {
        //
    }
}
