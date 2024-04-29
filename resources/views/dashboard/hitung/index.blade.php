@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-hitung$hitung-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Bobot</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>
      
      <form method="POST" action="/hitung/index">
        @csrf

        <div>
            <label for="nama_kriteria">Nama Kriteria:</label>
            <input type="text" id="nama_kriteria" name="nama_kriteria">
        </div>

        <div>
            <label for="nilai_perbandingan">Nilai Perbandingan:</label>
            <input type="number" id="nilai_perbandingan" name="nilai_perbandingan">
        </div>

        <button type="submit">Simpan</button>
    </form>

    <!-- Tabel untuk menampilkan data perbandingan antar kriteria -->
    <h2>Data Perbandingan Antar Kriteria</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Kriteria</th>
                <th>Nilai Perbandingan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hitung as $hitung)
            <tr>
                <td>{{ $hitung->nama_kriteria }}</td>
                <td>{{ $hitung->nilai_perbandingan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tombol untuk menghitung bobot relatif -->
    <form method="POST" action="/hitung">
        @csrf
        <button type="submit">Hitung Bobot Relatif</button>
    </form>
      @endsection