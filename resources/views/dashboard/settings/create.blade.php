@extends('dashboard.layouts')

@section('content')

<div class="container">
    <h2>Buat Setting</h2>
<form action="{{ isset($setting) ? route('settings.update', $setting) : route('settings.store') }}" method="POST">
  @csrf
  @if(isset($setting))
    @method('PUT')
  @endif

  <div class="mb-3">
    <label>Judul Website</label>
    <input type="text" name="site_title" class="form-control" value="{{ old('site_title', $setting->site_title ?? '') }}">
  </div>

  <div class="mb-3">
    <label>Deskripsi Profil</label>
    <textarea name="profile_description" class="form-control">{{ old('profile_description', $setting->profile_description ?? '') }}</textarea>
  </div>

  <div class="mb-3">
    <label>Email Kontak</label>
    <input type="email" name="contact_email" class="form-control" value="{{ old('contact_email', $setting->contact_email ?? '') }}">
  </div>

  <div class="mb-3">
    <label>Nomor Telepon</label>
    <input type="text" name="contact_phone" class="form-control" value="{{ old('contact_phone', $setting->contact_phone ?? '') }}">
  </div>

  <div class="mb-3">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $setting->alamat ?? '') }}">
  </div>

  <div class="mb-3">
    <label>Maps</label>
    <input type="text" name="maps" class="form-control" value="{{ old('maps', $setting->maps ?? '') }}">
  </div>

  <h5 class="mt-3">Media Sosial</h5>

  <input type="text" name="facebook" class="form-control mb-2" placeholder="Facebook" value="{{ old('facebook', $setting->facebook ?? '') }}">
  <input type="text" name="instagram" class="form-control mb-2" placeholder="Instagram" value="{{ old('instagram', $setting->instagram ?? '') }}">
  <input type="text" name="twitter" class="form-control mb-2" placeholder="Twitter" value="{{ old('twitter', $setting->twitter ?? '') }}">
  <input type="text" name="youtube" class="form-control mb-2" placeholder="YouTube" value="{{ old('youtube', $setting->youtube ?? '') }}">

  <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
