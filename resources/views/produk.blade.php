@extends('master')
@section('konten')


    <title>Iklan Produk</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            border: 2px solid #007BFF; /* Warna garis tepi */
            border-radius: 10px;
            background-color: #F8F9FA; /* Warna latar belakang */
            box-shadow: 0px 0px 10px #007BFF; /* Efek bayangan */
        }
        h1 {
            color: #007BFF; /* Warna teks judul */
            font-family: 'Arial', sans-serif; /* Ganti font */
        }
        #produk {
            width: 80%;
            margin: 20px auto;
        }
        #produk img {
            max-width: 100%;
        }
        #deskripsi {
            text-align: left;
        }
        button {
            background-color: #007BFF; /* Warna tombol */
            color: white; /* Warna teks tombol */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3; /* Warna tombol saat dihover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Iklan Produk</h1>
        
        <div id="produk">
            <img src="/image/iphone-removebg-preview.png" alt="Iphone 11">
        </div>
        
        <div id="deskripsi">
            <h2>Iphone 11  </h2>
            <p>Apple iPhone 11 merupakan HP dengan layar 6.1" dan tingkat densitas
                 piksel sebesar 326ppi. Ia dilengkapi dengan kamera belakang
                 12 + 12MP dan kamera depan 12MP. HP ini juga hadir dengan kapasitas baterai
                  3110mAh. Apple iPhone 11 dirilis pada: 2019.</p>
            <p>Harga: Rp.24.000.000</p>
            <p><strong>Spesifikasi:</strong></p>
            <ul>
                <li>Spesifikasi 1: Iphone 11</li>
                <li>Spesifikasi 2: Iphone 11 pro</li>
                <li>Spesifikasi 3: Iphone 11 promax</li>
            </ul>
            <button>Beli Sekarang</button>
        </div>
    </div>
</body>
</html>
@endsection

 
