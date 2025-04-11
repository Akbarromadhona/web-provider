@extends('layouts.app')

@section('content')
<section id="profile" class="profile section" style="margin-top: 100px">
  <div class="container" data-aos="fade-up">
    
    <div class="section-title text-center">
      <h2>Profil Lengkap</h2>
      {{-- Site Title --}}
      <h3>{{ $settings->site_title }}</h3>  
    </div>

    <div class="row align-items-center">
      {{-- Gambar --}}
      <div class="col-lg-6 text-center mb-4 mb-lg-0">
        <img src="{{ asset('assets/img/hero-services-img.webp') }}" 
             alt="Profil Perusahaan" 
             class="img-fluid rounded"
             style="max-width: 100%; width: 100%; height: auto;">
      </div>

      {{-- Deskripsi --}}
      <div class="col-lg-6">
        <p>
          {!! nl2br(e($settings->profile_full ?? $settings->profile_description)) !!}
        </p>
      </div>
    </div>

  </div>
</section>
@endsection
