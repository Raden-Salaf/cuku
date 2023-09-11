@extends('master')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
        .add-button {
            background-color: #007BFF;
            color: white; /* Tambahkan warna putih untuk teks */
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .add-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Buku Tamu</h1>
    <a href="/bukutamu/tambah" class="add-button">+ Tambah Tamu</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Jumlah Pesanan</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        @foreach($bukutamu as $b)
        <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->nama}}</td>
            <td>{{$b->no_telepon}}</td>
            <td>{{$b->jumlah_pesanan}}</td>
            <td>{{$b->alamat}}</td>
            <td>
                  <a href="/bukutamu/edit/{{$b->id}}"><button class="edit-button">Edit</button></a>
                  <a href="/bukutamu/delete/{{$b->id}}"><button class="delete-button">Hapus</button></a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
@endsection
