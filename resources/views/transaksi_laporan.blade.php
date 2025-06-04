<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Transaksi</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Pengguna</th>
                            <th>Nama Mobil</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Total Harga</th>
                            <th>Status Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->pengguna->name }}</td>
                            <td>{{ $a->mobil->nama_mobil }}</td>
                            <td>{{ $a->tanggal_pemesanan }}</td>
                            <td>{{ $a->tanggal_mulai }}</td>
                            <td>{{ $a->tanggal_selesai }}</td>
                            <td>{{ number_format($a->total_harga, 2) }}</td>
                            <td>{{ ucfirst($a->status_pembayaran) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>Mengetahui</h5>
                <br>
                <br>
                <br>
                <h5>Admin</h5>
            </div>
        </div>
    </div>
</body>

</html>
