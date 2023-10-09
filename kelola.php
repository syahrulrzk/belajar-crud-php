<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelola-crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link href="fontawesome/css/fontawesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary mb-4">
        <div class="container">
          <a class="navbar-brand" href="#">
            <i class="fa fa-code" aria-hidden="true"></i> CRUD - PHP
          </a>
        </div>
      </nav>

      <div class="container">
        <form method="POST" action="proses.php">
            <div class="mb-3 row">
              <label for="nisn" class="col-sm-2 col-form-label">
                NISN
              </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nisn" placeholder="Ex : 112233">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">
                Nama Siswa
              </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" placeholder="Jarot">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="jkel" class="col-sm-2 col-form-label">
                Jenis Kelamin
              </label>
              <div class="col-sm-10">
                <select class="form-select">
                  <option selected>Jenis Kelamin</option>
                  <option value="1">Laki-laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
            </div>

            <div class="mb-3 row">
              <label for="foto" class="col-sm-2 col-form-label">
                Foto Siswa
              </label>
              <div class="col-sm-10">
                <input class="form-control" type="file" id="foto">
              </div>
            </div>

             <div class="mb-3 row">
              <label for="alamat" class="col-sm-2 col-form-label">
                Alamat Lengkap
              </label>
              <div class="col-sm-10">
                <textarea class="form-control" placeholder="Jl...." id="alamat"></textarea>
              </div>
            </div>
            <?php  ?>
            <div class="mb-3 row ">
              <div class="col d-flex justify-content-end">
                 <?php  
                      if (isset($_GET['ubah'])) {   
                 ?>
                      <button type="submit" name="aksi" value="edit" class="btn btn-primary ms-2">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                         Simpan Perubahan
                      </button >
                <?php 
                  } else {
                ?>
                      <button type="submit" name="aksi" value="add" class="btn btn-primary ms-2">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                         Tambahkan
                      </button>

                <?php   
                    }
                 ?>
                      <button href="index.php" type="button" class="btn btn-danger ms-2">
                        <i class="fa fa-reply" aria-hidden="true"></i>
                        Batal
                     </button> 
              </div>
            </div>
        </form>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>