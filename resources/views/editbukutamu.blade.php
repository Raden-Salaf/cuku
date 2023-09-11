<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Database</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h3 {
            background-color:#ff0000;
            color: #fff;
            padding: 10px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #ff0000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        input[type="submit"]:hover {
            background-color: #ff0000;
        }
    </style>
</head>
<body>
    <h3>Data gaji</h3>
    <a href="/bukutamu">Kembali</a>
    <br/>
    <br/>
    @foreach($bukutamu as $b)
    <form action="/bukutamu/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$b->id}}"><br/>
        <label for="pegawai">Nama:</label>
        <input type="text" required="required" name="nama" value="{{$b->nama}}"><br/>
        <label for="bulan">No Telepon:</label>
        <input type="number" required="required" name="telepon" value="{{$b->no_telepon}}"><br/>
        <label for="lembur">Jumlah Pesanan:</label>
        <input type="number" required="required" name="pesanan" value="{{$b->jumlah_pesanan}}"><br/>
        <label for="bukutamu">Alamat:</label>
        <input type="text" required="required" name="alamat" value="{{$b->alamat}}"><br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>
