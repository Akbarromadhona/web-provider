@extends('dashboard.layouts')

@section('content')
<div class="container">
    <h2>Tambah Produk</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Nama Produk</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="price">Harga</label>
            <input type="number" name="price" class="form-control">
        </div>
        <div class="mb-3">
            <label for="image">Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div>
            <label for="points">Poin-poin (pisahkan dengan baris baru)</label>
            <textarea name="points" rows="4" class="form-control">{{ old('points', $product->points ?? '') }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
