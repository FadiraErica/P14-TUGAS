@extends('layout.app')

@section('content')
<div class="form-container">

    <h1>Tambah Mahasiswa</h1>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <p>
            <label>Nama:</label><br>
            <input type="text" name="nama" required>
        </p>
        <p>
            <label>NIM:</label><br>
            <input type="text" name="nim" required>
        </p>
        <p>
            <label>Jurusan:</label><br>
            <input type="text" name="jurusan" required>
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </p>
        <div class="button-group">
        <button type="submit" class="btn-submit">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn-cancel">Kembali</a>
    </div>
    </form>

    

@endsection
