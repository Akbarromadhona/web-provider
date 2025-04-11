@extends('layouts.app')

@section('content')
<section id="product-detail" class="product-detail section" style="margin-top: 100px">
  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">
      <h2>Detail Produk</h2>
      <h3>{{ $product->name }}</h3>  
    </div>

    <div class="row align-items-center">
      {{-- Gambar Produk --}}
      <div class="col-lg-6 text-center mb-4 mb-lg-0">
        <img src="{{ asset('assets/img/hero-services-img.webp') }}" 
             alt="{{ $product->name }}" 
             class="img-fluid rounded"
             style="max-width: 100%; width: 100%; height: auto;">
      </div>

      {{-- Deskripsi Produk --}}
      <div class="col-lg-6">
        <h4 class="text-primary mb-3">Harga: Rp {{ number_format($product->price) }} / bulan</h4>
        <p>
          {!! nl2br(e($product->description ?? 'Tidak ada deskripsi')) !!}
        </p>

        {{-- List fitur/point (semua baris) --}}
        @if($product->points)
          <ul>
            @foreach(explode("\n", $product->points) as $point)
              <li>{{ trim($point) }}</li>
            @endforeach
          </ul>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection
