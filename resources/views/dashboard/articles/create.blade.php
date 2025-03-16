@extends('dashboard.layouts')

@section('content')
<div class="container">
    <h2>Tambah Produk</h2>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Nama </label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description">Deskripsi</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
            <label for="image">Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
