@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Kriteria</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>
      <div class="col-lg-8">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Baru</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('data.store') }}">
                            @csrf

                            <!-- Tampilkan ID sebagai input yang tersembunyi -->
                            <div class="form-group">
                                <label for="id">ID:</label>
                                <input type="text" name="id" id="id" class="form-control" value="{{ \App\Models\Data::max('id') + 1 }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="kriteria">Kriteria:</label>
                                <input type="text" name="kriteria" id="kriteria" class="form-control">
                            </div>


                            <!-- Tambahkan input untuk kolom-kolom lainnya sesuai kebutuhan -->

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
