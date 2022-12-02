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

    @if($errors->first('not_found'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $errors->first('not_found') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

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
                <td>
                    <a href="{{ route('mahasiswa.edit', ["id" => $mahasiswa->id]) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('mahasiswa.delete', ["id" => $mahasiswa->id]) }}"
                        class="btn btn-danger ml-2">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('scripts')

@endpush
