@extends('dashboard.layouts')

@section('content')
<div class="container">
    <h2>Edit Galeri</h2>

    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Nama Produk</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Deskripsi</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $product->description}}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Harga</label>
            <textarea name="price" id="price" class="form-control" rows="3">{{ $product->price }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
