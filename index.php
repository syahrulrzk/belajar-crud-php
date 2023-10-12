<?php 
    include 'koneksi.php'; // connekt db

    $query  = "SELECT * FROM tb_siswa;";
    $sql    = mysqli_query($conn, $query);
    $no     = 0;

    // var_dump($sql); ketahui nilai data
    // $result = mysqli_fetch_row($sql);
    // echo $result[2]; 

    // $result = mysqli_fetch_assoc($sql);
    // echo $result['nama_siswa']

    // while ($result = mysqli_fetch_assoc($sql)) {
    //   echo $result['nama_siswa']. "<br>";
    // }

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar-crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            <!-- Ambil data on database -->

            <?php 
                while ($result = mysqli_fetch_assoc($sql)) {
             ?>
              <tr>
                <td><center>
                  <?php echo ++$no; ?>.
                </center></td>
                <td><?php echo $result['nisn']; ?></td>
                <td><?php echo $result['nama_siswa']; ?></td>
                <td><?php echo $result['jenis_kelamin']; ?></td>
                <td><img src="img/foto-anime/<?php echo $result['foto_siswa']; ?>" style="width:50px; height: 70px;"></td>
                <td><?php echo $result['alamat']; ?></td>
                <td>
                  <a href="kelola.php?ubah=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut???')"></i></a>
                </td>
              </tr>

            <?php 
                 }
             ?>

            </tbody>
          </table>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>