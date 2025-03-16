@extends('dashboard.layouts')

@section('content')
<div class="container">
    <h2>Edit Artikel</h2>

    <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea name="content" id="content" class="form-control" rows="5" required>{{ $article->content }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar (Opsional)</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
