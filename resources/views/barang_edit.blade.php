@extends('utama')
@section('content')
<body>

  <h2>Edit Barang</h2>

  <form action="{{ route('barang_update', $barang->id) }}" method="post">
    @csrf
    @method('PUT')
    <div>
    <label for="no_barang">No Barang:</label>
    <input type="text" name="no_barang" value="{{ $barang->no_barang }}" required>
    </div>
    <div>
    <label for="nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required>
    </div>
    <div>
    <label for="varian">Varian:</label>
    <input type="text" name="varian" value="{{ $barang->varian }}" required>
    </div>
    <div>
    <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa:</label>
    <input type="date" name="tanggal_kadaluarsa" value="{{ $barang->tanggal_kadaluarsa }}" required>
    </div>
    <div>
    <label for="tanggal_produksi">Tanggal Produksi:</label>
    <input type="date" name="tanggal_produksi" value="{{ $barang->tanggal_produksi }}" required>
    </div>
    <div>
    <label for="harga_beli">Harga Beli:</label>
    <input type="number" name="harga_beli" value="{{ $barang->harga_beli }}" required>
    </div>
    <div>
    <button type="submit">Simpan</button>
  </form>

</body>
</html>

@endsection