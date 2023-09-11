<body>
    <header>
        <h1>Create – Insert Database</h1>
    </header>
    <div class="container">
        <h3>Daftar Tamu</h3>
        <a href="/bukutamu"> Kembali</a>
        <br/><br/>
        <form action="/bukutamu/storetambah" method="post">
            {{ csrf_field() }}
            Id : <br>
            <input type="hidden" name="id" required="required"> <br/>
            Nama: <br>
            <input type="text" name="nama" required="required"> <br/>
            No Telepon : <br>
            <input type="number" name="telepon" required="required"> <br/>
            Jumlah Pesanan : <br>
            <input type="number" name="pesanan" required="required"><br/>
            alamat : <br>
            <input type="text" name="alamat" required="rquired"> <br/>
            <input type="submit" value="Simpan Data">
        </form>
    </div>
</body>