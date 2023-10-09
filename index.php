<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar-crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link href="fontawesome/css/fontawesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <i class="fa fa-code" aria-hidden="true"></i> CRUD - PHP
          </a>
        </div>
      </nav>

    <div class="container">
      <h1>Data Siswa</h1>
      <figure>
        <blockquote class="blockquote">
          <p>Berisi data yang telah di simpan di Database</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          CRUD <cite title="Source Title">Create, Read, Update, Delete</cite>
        </figcaption>
      </figure>
        <a href="kelola.php" type="button" class="btn btn-primary">
          <i class="fa fa-plus"></i> Tambah Data</a>
        <div class="table-responsive mt-1">
          <table class="table align-middle table-hover border">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nisn</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Poto</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>002231</td>
                <td>Jamet</td>
                <td>Laki-laki</td>
                <td><img src="img/foto-anime/img1.jpg" style="width:50px; height: 70px;"></td>
                <td>Jl.Jongol</td>
                <td>
                  <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </td>
              </tr>
              <tr>
                <td>2.</td>
                <td>002232</td>
                <td>Jenitya</td>
                <td>Perempuan</td>
                <td><img src="img/foto-anime/img4.jpg" style="width:50px; height: 70px;"></td>
                <td>Jl.Sicantik</td>
                <td>
                  <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </td>
              </tr>
              <tr>
                <td>3.</td>
                <td>002233</td>
                <td>Ucup</td>
                <td>Laki-laki</td>
                <td><img src="img/foto-anime/img2.jpg" style="width:50px; height: 70px;"></td>
                <td>Jl.Gatau Jalan</td>
                <td>
                  <a href="kelola.php?ubah=3" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>