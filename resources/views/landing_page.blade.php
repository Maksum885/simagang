<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page SIMAGANG</title>
</head>

<body>
    <h1>Selamat Datang di SIMAGANG</h1>
    <table border="1">
        <tr>
            <th>Nama Magang</th>
            <th>Lokasi</th>
            <th>Durasi</th>
        </tr>
        @foreach ($data as $magang)
        <tr>
            <td>{{ $magang['nama'] }}</td>
            <td>{{ $magang['lokasi'] }}</td>
            <td>{{ $magang['durasi'] }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>