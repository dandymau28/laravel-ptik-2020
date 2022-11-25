@extends('layout.app')

@section('title', 'All Mahasiswa')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Halaman Mahasiswa</h1>
            <p class="lead">Halaman untuk menampilkan semua mahasiswa yang ada pada database</p>
        </div>
    </div>

    <div class="container">
        <div class="float-right">
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $index => $mahasiswa)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->jurusan }}</td>
                    <td>{{ $mahasiswa->angkatan }}</td>
                    <td><a href="{{ route('mahasiswa.edit', ["id" => $mahasiswa->id]) }}" class="btn btn-warning">Edit Mahasiswa</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
