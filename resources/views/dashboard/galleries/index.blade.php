@extends('dashboard.layouts')

@section('content')
<div class="container">
    <h2>Galeri</h2>
    <a href="{{ route('galleries.create') }}" class="btn btn-primary">Tambah Gambar</a>
    <table class="table">
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        @foreach($galleries as $gallery)
        <tr>
            <td>{{ $gallery->title }}</td>
            <td style="max-width: 400px; word-break: break-word; white-space: normal; overflow-wrap: break-word;">{{ $gallery->description }}</td>
            <td><img src="{{ asset('storage/' . $gallery->image) }}" width="50"></td>
            <td>
                <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
