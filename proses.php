<?php 

	include 'koneksi.php'; // connekt db

	if(isset ($_POST['aksi'])) {
		if($_POST['aksi'] == "add"){
			

			$nisn	= $_POST['nisn'];
			$nama_siswa	= $_POST['nama_siswa'];
			$jenis_kelamin	= $_POST['jenis_kelamin'];
			$foto	= "img1.jpg";
			$alamat = $_POST['alamat'];

			$query	= "INSERT INTO tb_siswa VALUES( null, '$nisn', '$nama_siswa', '$jenis_kelamin', '$foto', '$alamat')";
			$sql	= mysqli_query($conn, $query);

			if ($sql) {
				header("location: index.php");
				// echo " Data berhasil di Tambahkan <a href='index.php'>[ Home ] </a>";
			} else {
				echo $query;
			}

			// echo $nisn." | ".$nama_siswa." | ".$jenis_kelamin." | ".$foto." | ".$alamat;
			// echo "<br>Tambahakan Data Succsess <a href='index.php'>[ Home ] </a>";



		} else if ($_POST['aksi'] == "edit"){
			echo "Edit Data Succsess <a href='index.php'>[ Home ]</a>";
				
		}
	}

	if (isset ($_GET['hapus'])) {
		$id_siswa = $_GET['hapus'];
		$query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa';";
		$sql = mysqli_query($conn, $query);

		if ($sql) {
				header("location: index.php");
				// echo " Data berhasil di Tambahkan <a href='index.php'>[ Home ] </a>";
			} else {
				echo $query;
		}

		// echo "Hapus Data Succsess <a href='index.php'>[ Home ]</a>";
	}

 ?>
