<?php

namespace App\Http\Controllers;

use App\Models\Perbandingankriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardPerbandinganKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Sample comparison data for demonstration purposes
        $bobotRelatif = [
            'Harga' => [1, 2, 3, 4, 5],
            'RAM' => [0.5, 1, 2, 3, 4],
            'Kamera' => [0.25, 0.33, 0.5, 1, 2],
            'Baterai' => [0.2, 0.25, 0.5, 1, 1.5],
            'Memori' => [0.17, 0.2, 0.5, 0.67, 1],
        ];

        // Calculate the result matrix
        $resultMatrix = $this->calculateResultMatrix($bobotRelatif);

        // Calculate consistency information
        $consistency = $this->calculateConsistency($resultMatrix);

        // Calculate consistency ratio
        $consistencyRatio = $this->calculateConsistencyRatio($resultMatrix);

        $weights = $this->calculateWeight($resultMatrix);

        return view('dashboard.perbandingan.index', compact('bobotRelatif', 'resultMatrix', 'consistency', 'consistencyRatio', 'weights'));
    }
    /**
     * Calculate the result matrix based on pairwise comparison matrix.
     */
    private function calculateResultMatrix($bobotRelatif)
    {
        $resultMatrix = [];
        foreach ($bobotRelatif as $kriteria1 => $bobot1) {
            foreach ($bobot1 as $index1 => $value1) {
                foreach ($bobotRelatif as $kriteria2 => $bobot2) {
                    $resultMatrix[$kriteria1][$index1][$kriteria2] = $value1 / $bobot2[$index1];
                }
            }
        }
        return $resultMatrix;
    }

    /**
     * Calculate the consistency information.
     */
    private function calculateConsistency($resultMatrix)
    {
        // Placeholder consistency values for demonstration
        $consistency = [
            'ci' => 0.1,
            'ri' => 0.2,
            'cr' => 0.5,
        ];
        return $consistency;
    }

    private function calculateConsistencyRatio($resultMatrix)
    {
    // Your consistency ratio calculation logic here
    // Calculate CR based on resultMatrix

    // For example:
    $consistencyRatio = 0.05; // Sample consistency ratio value

    return $consistencyRatio;
    }

    private function calculateWeight($resultMatrix)
    {
        $weights = [];

        foreach ($resultMatrix as $kriteria1 => $matriks1) {
            $total = 0;

            foreach ($matriks1 as $kriteria2 => $nilai) {
                foreach ($nilai as $nilaiPerbandingan) {
                    $total += $nilaiPerbandingan;
                }
            }

            $weights[$kriteria1] = $total / count($resultMatrix);
        }

        return $weights;
    }
        // Anda dapat menambahkan penanganan kasus untuk n yang lebih besar di sini jika diperlukan
    /**
     * Show the form for creating a new resource.
     */
    
     public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Harga.*' => 'required|numeric',
            'RAM.*' => 'required|numeric',
            'Kamera.*' => 'required|numeric',
            'Baterai.*' => 'required|numeric',
            'Memori.*' => 'required|numeric',
            'Layar.*' => 'required|numeric',
            'Chipset.*' => 'required|numeric',
        ]);
    
        // Simpan data perbandingan kriteria ke dalam database
        foreach ($data as $kriteria => $nilai) {
            foreach ($nilai as $index => $nilaiPerbandingan) {
                PerbandinganKriteria::create([
                    'kriteria1' => $kriteria,
                    'kriteria2' => $kriteria,
                    'nilai_perbandingan' => $nilaiPerbandingan,
                ]);
            }
        }
    
        return redirect()->route('perbandingan.index')->with('success', 'Data perbandingan kriteria berhasil disimpan.');
    }
        private function calculatePrincipalEigenvector($resultMatrix)
    {
        $n = count($resultMatrix);
        $principalEigenvector = [];

        foreach ($resultMatrix as $kriteria1 => $matriks1) {
            $total = 0;

            foreach ($matriks1 as $kriteria2 => $nilai) {
                $total += array_sum($nilai);
            }

            $principalEigenvector[$kriteria1] = $total / $n;
        }

        // Normalize the eigenvector
        $totalEigenvalue = array_sum($principalEigenvector);
        foreach ($principalEigenvector as &$eigenvalue) {
            $eigenvalue /= $totalEigenvalue;
        }

        return $principalEigenvector;
    }


    /**
     * Display the specified resource.
     */
    public function show(Perbandingankriteria $perbandingankriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perbandingankriteria $perbandingankriteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perbandingankriteria $perbandingankriteria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perbandingankriteria $perbandingankriteria)
    {
        //
    }
}
