@extends('dashboard.layouts')

@section('content')
<div class="container mt-4">
    <h2>Dashboard</h2>
    <p>Selamat datang di dashboard admin. Berikut adalah ringkasan data:</p>

    <div class="row">
        <!-- Card Produk -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Produk</h5>
                    <p class="card-text">{{ $products }}</p>
                </div>
            </div>
        </div>

        <!-- Card Artikel -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Artikel</h5>
                    <p class="card-text">{{ $articles }}</p>
                </div>
            </div>
        </div>

        <!-- Card Galeri -->
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Galeri</h5>
                    <p class="card-text">{{ $galleries }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
