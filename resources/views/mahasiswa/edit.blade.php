@extends('layout.app')

@section('content')
<div class="form-container">
    <h1>Edit Mahasiswa</h1>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Nama:</label><br>
            <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required>
        </p>
        <p>
            <label>NIM:</label><br>
            <input type="text" name="nim" value="{{ $mahasiswa->nim }}" required>
        </p>
        <p>
            <label>Jurusan:</label><br>
            <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" required>
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ $mahasiswa->email }}" required>
        </p>
        <div class="button-group">
                <button type="submit" class="btn-submit">Update</button>
                <button type="button" class="btn-cancel" onclick="window.location='{{ route('mahasiswa.index') }}'">Kembali</button>
        </div>

    </form>

    
</div>
@endsection
