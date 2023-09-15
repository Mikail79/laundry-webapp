<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Transaksi Laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h5>Laporan Transaksi Laundry</h5>
        <table class="table table-striped mt-4 table-hover">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Jam & Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laundry as $row)
                    <tr>
                    <th scope="row" width="15%">{{$row->id}}</th>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->barang_id}}</td>
                    <td>{{$row->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>