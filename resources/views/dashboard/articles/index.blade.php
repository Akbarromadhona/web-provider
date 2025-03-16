@extends('dashboard.layouts')

@section('content')
<div class="container">
    <h2>Daftar Artikel</h2>
    <a href="{{ route('articles.create') }}" class="btn btn-primary">Tambah Artikel</a>
    <table class="table">
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        @foreach($articles as $article)
        <tr>
            <td>{{ $article->title }}</td>
            <td>{{ $article->content }}</td>
            <td><img src="{{ asset('storage/' . $article->image) }}" width="50"></td>
            <td>
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
