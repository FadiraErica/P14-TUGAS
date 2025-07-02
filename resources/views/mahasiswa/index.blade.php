@extends('layout.app')

@section('content')
    <h1>Data Mahasiswa</h1>
    <div class="action-buttons">
    <a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        @foreach ($mahasiswas as $mhs)
        <tr>
            <td>{{ $mhs->id }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->email }}</td>
            <td class="table-actions">
                <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="edit-btn">Edit</a>
                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn" onclick="return confirm('Yakin?')">Hapus</button>
                </form>
            </td>

            </td>
        </tr>
        @endforeach
    </table>
@endsection
