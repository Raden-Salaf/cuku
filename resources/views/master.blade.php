<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iphone Murah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .navbar {
            margin: 0 auto;
            display: table;
        }
    </style>
  </head>
  <body>
    <div class="alert alert-primary" role="alert">
    <nav class="navbar navbar-expand-lg bg-body-tertiary"> <!-- Tambahkan kelas mx-auto di sini -->
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <button type="button" class="btn btn-danger btn-sm"><a class="nav-link active link-light" aria-current="page" href="/latihan2">Home</button></a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-primary btn-sm"><a class="nav-link link-light"  href="/latihan2/produk">Produk</button></a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-success btn-sm"><a class="nav-link link-light" href="/latihan2/kontak">Kontak</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-warning btn-sm"><a class="nav-link link-light" href="/bukutamu">Bukutamu</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
         </div>
        </div>
      </div>
    </nav>
    @yield('konten')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
