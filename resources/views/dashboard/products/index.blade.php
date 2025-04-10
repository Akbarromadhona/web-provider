@extends('dashboard.layouts')

@section('content')
<div class="container">
    <h2>Daftar Produk</h2>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Poin Fitur</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td>{{ $product->name }}</td>
            <td>Rp {{ number_format($product->price) }}</td>
            <td>
                <ul>
                    @foreach(array_slice(explode("\n", $product->points), 0, 4) as $point)
                      <li>{{ trim($point) }}</li>
                    @endforeach
                </ul>
            </td>
            <td>
              <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
</div>
@endsection
