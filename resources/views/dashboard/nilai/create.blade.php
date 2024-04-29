@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Nilai Kriteria</h1>
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
                    <div class="card-header">Tambah Data Nilai Kriteria</div>

                    <div class="card-body">
                    <form method="post" action="{{ route('handphone.store') }}">
            @csrf
            <div class="form-group">
                <label for="kriteria1">Kriteria 1:</label>
                <input type="text" class="form-control" id="kriteria1" name="kriteria1" required>
            </div>
            <div class="form-group">
                <label for="comparison">Perbandingan:</label>
                <input type="number" class="form-control" id="comparison" name="comparison" required>
            </div>
            <div class="form-group">
                <label for="kriteria2">Kriteria 2:</label>
                <input type="text" class="form-control" id="kriteria2" name="kriteria2" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
