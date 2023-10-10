<?php 

	include 'koneksi.php'; // connekt db

	if(isset ($_POST['aksi'])) {
		if($_POST['aksi'] == "add"){
			echo "Tambahakan Data Succsess <a href='index.php'>[ Home ] </a>";

			$nisn	= $_POST['nisn'];
			$nama_siswa	= $_POST['nama_siswa'];
			$jenis_kelamin	= $_POST['jenis_kelamin'];
			$foto	= "img/img-anime/img5.jpg";
			$alamat = $_POST['alamat'];

			$query	= "INSERT INTO tb_siswa VALUES( null, '$nisn', '$nama_siswa', '$jenis_kelamin', '$foto', '$alamat')";
			$sql	= mysqli_query($conn, $query);

			if ($sql) {
				echo " Data berhasil di Tambahkan <a href='index.php'>[ Home ] </a>";
			} else {
				echo $query;
			}

			echo $nisn." | ".$nama_siswa." | ".$jenis_kelamin." | ".$foto." | ".$alamat;




		} else if ($_POST['aksi'] == "edit"){
			echo "Edit Data Succsess <a href='index.php'>[ Home ]</a>";
				
		}
	}

	if (isset ($_GET['hapus'])) {
		echo "Hapus Data Succsess <a href='index.php'>[ Home ]</a>";
	}

 ?>
