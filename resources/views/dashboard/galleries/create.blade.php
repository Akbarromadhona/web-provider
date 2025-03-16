@extends('dashboard.layouts')

@section('content')
<div class="container">
    <h2>Tambah Galery</h2>
    <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Judul</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="image">Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
