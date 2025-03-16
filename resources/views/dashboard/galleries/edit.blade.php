@extends('dashboard.layouts')

@section('content')
<div class="container">
    <h2>Edit Galeri</h2>

    <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $gallery->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi (Opsional)</label>
            <textarea name="description" id="description" class="form-control" rows="3">{{ $gallery->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar (Opsional)</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($gallery->image)
                <img src="{{ asset('storage/' . $gallery->image) }}" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('galleries.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
