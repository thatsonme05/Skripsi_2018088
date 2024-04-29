@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Handphone</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>
      <div class="table-responsive small">
        <a href="handphone/create" class="btn btn-primary mb-3"> Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Brand</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($handphone as $handphone)
                <tr>
                    <td>{{ $handphone->brand }}</td>
                    <td>
                    <a href="" class="badge bg-warning small"><i class="bi bi-pen"></i>
                    <a href="" class="badge bg-danger small"><i class="bi bi-x-octagon"></i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
      @endsection