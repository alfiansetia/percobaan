<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Penilaian</title>
    <style>
        table {
            border-spacing: 0;
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 6px;
            font-size: 12px;
        }

        th {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <h3>Kelas : {{ $class['name'] }}</h3>
    <h3>Mapel : {{ $mapel['name'] }}</h3>
    <table>
        <thead>
            <tr>
                <th style="text-align: center">No</th>
                <th>Nama</th>
                <th style="text-align: center">Nilai 1</th>
                <th style="text-align: center">Nilai 2</th>
                <th style="text-align: center">Nilai 3</th>
                <th style="text-align: center">Nilai 4</th>
                <th style="text-align: center">Nilai 5</th>
                <th style="text-align: center">Nilai 6</th>
                <th style="text-align: center">Nilai 7</th>
                <th style="text-align: center">Nilai 8</th>
                <th style="text-align: center">Nilai 9</th>
                <th style="text-align: center">Nilai 10</th>
                <th style="text-align: center">Nilai 11</th>
                <th style="text-align: center">Nilai 12</th>
                <th style="text-align: center">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $item)
                <tr>
                    <td style="text-align: center">{{ $key + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td style="text-align: center">{{ $item->nilai1 }}</td>
                    <td style="text-align: center">{{ $item->nilai2 }}</td>
                    <td style="text-align: center">{{ $item->nilai3 }}</td>
                    <td style="text-align: center">{{ $item->nilai4 }}</td>
                    <td style="text-align: center">{{ $item->nilai5 }}</td>
                    <td style="text-align: center">{{ $item->nilai6 }}</td>
                    <td style="text-align: center">{{ $item->nilai7 }}</td>
                    <td style="text-align: center">{{ $item->nilai8 }}</td>
                    <td style="text-align: center">{{ $item->nilai9 }}</td>
                    <td style="text-align: center">{{ $item->nilai10 }}</td>
                    <td style="text-align: center">{{ $item->nilai11 }}</td>
                    <td style="text-align: center">{{ $item->nilai12 }}</td>
                    <td style="text-align: center">{{ $item->total() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
