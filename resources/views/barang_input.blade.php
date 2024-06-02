@extends('utama')
@section('content')
<body>

    <h2>Form Tambah Barang</h2>

    <form action="{{ route('barang_store') }}" method="post">
    @csrf
    <div>
    <label for="no_barang">No Barang:</label>
    <input type="text" name="no_barang" placeholder="No Barang">
    </div>
    <div>
    <label for="nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" placeholder="Nama Barang">
    </div>
    <div>
    <label for="varian">Varian:</label>
    <input type="text" name="varian" placeholder="Varian">
    </div>
    <div>
    <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa:</label>
    <input type="date" name="tanggal_kadaluarsa" placeholder="Tanggal Kadaluarsa">
    </div>
    <div>
    <label for="tanggal_produksi">Tanggal Produksi:</label>
    <input type="date" name="tanggal_produksi" placeholder="Tanggal Produksi">
    </div>
    <div>
    <label for="harga_beli">Harga Beli:</label>
    <input type="number" name="harga_beli" placeholder="Harga Beli">
    </div>
    <button type="submit">Tambah</button>
    <button class="btn btn-light">Cancel</button>
    </form>

</body>
</html>

@endsection