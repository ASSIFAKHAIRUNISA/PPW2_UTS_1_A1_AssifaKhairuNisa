<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model</title>
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemain as $index => $pemain1)
                <tr>
                    <td>{{ $pemain1->id }}</td>
                    <td>{{ $pemain1->nama_pemain }}</td>
                    <td>{{ $pemain1->no_punggung }}</td>
                    <td>{{ $pemain1->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
