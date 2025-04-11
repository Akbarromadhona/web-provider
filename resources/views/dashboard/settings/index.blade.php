@extends('dashboard.layouts')

@section('content')

<div class="container">
    <h2>Daftar Produk</h2>

  <a href="{{ route('settings.create') }}" class="btn btn-primary">Tambah Setting</a>
<table class="table mt-3">
  <thead>
    <tr>
      <th>Site Title</th>
      <th>Profile</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($settings as $setting)
    <tr>
      <td>{{ $setting->site_title }}</td>
      <td>{{ Str::limit($setting->profile_description, 50) }}</td>
      <td>{{ $setting->contact_email }}</td>
      <td>
        <a href="{{ route('settings.edit', $setting) }}" class="btn btn-sm btn-warning">Edit</a>
      </td>
      <td>
        <form action="{{ route('settings.destroy', $setting->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
