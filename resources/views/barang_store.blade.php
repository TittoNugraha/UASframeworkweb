@extends('utama')
@section('content')
<body>

  <h2>Daftar Barang</h2>

  <a href="{{ route('barang_input') }}">Tambah Barang</a>

  <table>
    <tr>
      <th>No Barang</th>
      <th>Nama Barang</th>
      <th>Varian</th>
      <th>Tanggal Kadaluarsa</th>
      <th>Tanggal Produksi</th>
      <th>Harga Beli</th>
      <th>Aksi</th>
    </tr>
    @foreach ($barangs as $barang)
      <tr>
        <td>{{ $barang->no_barang }}</td>
        <td>{{ $barang->nama_barang }}</td>
        <td>{{ $barang->varian }}</td>
        <td>{{ $barang->tanggal_kadaluarsa }}</td>
        <td>{{ $barang->tanggal_produksi }}</td>
        <td>{{ $barang->harga_beli }}</td>
        <td>
          <form action="{{ route('barang_destroy', $barang->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
          </form>
          <a href="{{ route('barang_edit', $barang->id) }}">Edit</a>
        </td>
      </tr>
    @endforeach
  </table>

</body>
</html>

@endsection