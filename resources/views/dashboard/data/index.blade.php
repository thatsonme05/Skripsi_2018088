@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Kriteria</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>
      <div class="table-responsive small">
        <a href="data/create" class="btn btn-primary mb-3"> Tambah Data</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kriteria</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
@foreach ($data as $data)
<tr>
    <td>{{ $data->id }}</td>
    <td>{{ $data->kriteria }}</td>
    <td>
    <a href="" class="badge bg-warning small"><i class="bi bi-pen"></i>
    <a href="" class="badge bg-danger small"><i class="bi bi-x-octagon"></i>
    </a>
    </td>
    <!-- Tambahkan sel-sel untuk kolom-kolom lainnya -->
</tr>
@endforeach
          </tbody>
        </table>
      </div>
      @endsection