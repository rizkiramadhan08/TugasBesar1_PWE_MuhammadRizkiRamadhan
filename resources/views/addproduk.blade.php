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
    <!-- Header -->
    <header style="display: flex; justify-content:space-between">
       <div>
        <h1>Daftar Produk</h1>
        <p>Temukan produk terbaik untuk kebutuhan anda</p>
       </div>
       <div>
        <button class="card_button">Add Product</button>
       </div>
    </header>

    <!-- Product Grid -->
    <div>
        <div class="container">
            <h1>Create Produk</h1>

            <form action="{{url('/produk/add')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="harga">harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="jumlah_produk">jumlah produk</label>
                    <input type="text" name="jumlah_produk" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">create</button>

            </form>

        </div>
    </div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
</footer>
</body>
</html>
