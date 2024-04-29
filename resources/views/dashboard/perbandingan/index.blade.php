@extends('dashboard.layouts.main')

@section('container')
    <h1>Halaman Perbandingan Kriteria</h1>

    <h1>Form Tambah Data Perbandingan Kriteria</h1>
    <form action="{{ route('perbandingan.store') }}" method="POST">
        @csrf
    <table>
        <thead>
            <tr>
                <th></th>
                @foreach($bobotRelatif as $kriteria => $bobot)
                    <th>{{ $kriteria }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($bobotRelatif as $kriteria1 => $bobot1)
                <tr>
                    <td>{{ $kriteria1 }}</td>
                    @foreach($bobot1 as $index => $value)
                        <td>
                            <input type="number" name="{{ $kriteria1 }}[]" value="{{ old($kriteria1.'.'.$index) }}">
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit">Submit</button>
</form>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
          <div class="mt-4">
            <h2>Perbandingan Kriteria</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kriteria</th>
                            @foreach($bobotRelatif as $kriteria => $bobot)
                                <th>{{ $kriteria }}</th>
                            @endforeach
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bobotRelatif as $kriteria => $bobot)
                            <tr>
                                <td>{{ $kriteria }}</td>
                                @foreach($bobot as $value)
                                    <td>{{ $value }}</td>
                                @endforeach
                                <td>
    <a href="" class="badge bg-warning small"><i class="bi bi-pen"></i>
    <a href="" class="badge bg-danger small"><i class="bi bi-x-octagon"></i>
    </a>
    </td>
                            </tr>
                            
                        
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Matriks Hasil --}}
        <div class="mt-4">
            <h2>Matriks Hasil</h2>
            @foreach($resultMatrix as $kriteria1 => $matriks1)
                <h4 class="mt-4">{{ $kriteria1 }}</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                @foreach($matriks1 as $kriteria2 => $nilai)
                                    <th>{{ $kriteria2 }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($matriks1 as $kriteria2 => $nilai)
                                <tr>
                                    <th>{{ $kriteria2 }}</th>
                                    @foreach($nilai as $nilaiPerbandingan)
                                        <td>{{ number_format($nilaiPerbandingan, 2) }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
                {{-- Tampilkan bobot hasil perhitungan matriks --}}
        <div class="mt-4">
            <h2>Bobot Hasil Perhitungan Matriks</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($weights as $kriteria => $bobot)
                        <tr>
                            <td>{{ $kriteria }}</td>
                            <td>{{ number_format($bobot, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Eigen Vector --}}
    <div class="mt-4">
        <h2>Eigen Vector</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($weights as $kriteria => $bobot)
                        <tr>
                            <td>{{ $kriteria }}</td>
                            <td>{{ number_format($bobot, 4) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        {{-- Konsistensi --}}
        <div class="mt-4">
            <h2>Konsistensi</h2>
            <p>Konsistensi matriks: {{ number_format($consistencyRatio, 4) }}</p>
        </div>
    </div>


    </div>
    
@endsection