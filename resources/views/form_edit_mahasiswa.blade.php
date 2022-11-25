@extends('layout.app')
@section('title', 'Form Mahasiswa')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ 'Edit Mahasiswa'}}</h1>
            <p class="lead"></p>
        </div>
    </div>

    <div class="container">
        <form action="{{ route('mahasiswa.update', ['id' => $mahasiswa->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="namaMahasiswa">Nama</label>
                <input type="text" class="form-control" id="namaMahasiswa" name="nama" value="{{ $mahasiswa->nama }}">
            </div>
            <div class="form-group">
                <label for="jurusanMahasiswa">Jurusan</label>
                <input type="text" class="form-control" id="jurusanMahasiswa" name="jurusan" value="{{ $mahasiswa->jurusan }}">
            </div>
            <div class="form-group">
                <label for="angkatanMahasiswa">Angkatan</label>
                <input type="text" class="form-control" id="angkatanMahasiswa" name="angkatan" value="{{ $mahasiswa->angkatan }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
