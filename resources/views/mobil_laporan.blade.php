<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Mobil</title>

    <!-- Scripts-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nama Mobil</td>
                            <td>Merk</td>
                            <td>Plat Nomor</td>
                            <td>Bahan Bakar</td>
                            <td>Harga Sewa</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mobil as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->nama_mobil }}</td>
                            <td>{{ $a->merk }}</td>
                            <td>{{ $a->plat_nomor }}</td>
                            <td>{{ $a->bahan_bakar }}</td>
                            <td>{{ number_format($a->harga_sewa, 2, ',', '.') }}</td>
                            <td>{{ ucfirst($a->status) }}</td>
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
