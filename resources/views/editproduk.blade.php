<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Penjualan</title>
        <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    </head>
    <body>
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Dashboard Penjualan</h2>
            <ul>
                <li><a href="{{ url('contoh') }}">Home</a></li>
                <li><a href="{{ url('produk') }}">Produk</a></li>
                <li><a href="#">Penjualan</a></li>
                <li><a href="#">Laporan</a></li>
                <li><a href="#">Pengaturan</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header style="display: flex; justify-content:space-between">
                <div>
                    <h1>Daftar Produk</h1>
                    <p>Temukan produk terbaik untuk kebutuhan anda</p>
                </div>
            </header>

            <form action="{{url('produk/edit/' . $ubah_produk->kode_produk)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div >
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" required value='{{$ubah_produk->nama_produk}}'>
                </div>

                <div >
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" required value='{{$ubah_produk->deskripsi}}'>
                </div>

                <div >
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" required value='{{$ubah_produk->harga}}'>
                </div>

                <div >
                    <label for="jumlah_produk">Jumlah Produk</label>
                    <input type="text" name="jumlah_produk" class="form-control" required value='{{$ubah_produk->jumlah_produk}}'>
                </div>

                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" name="image" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>

        <!-- Footer -->
        <footer class="footerku">
            <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
        </footer>
    </body>
</html>
