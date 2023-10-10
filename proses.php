<?php 
	if(isset ($_POST['aksi'])) {
		if($_POST['aksi'] == "add"){
			echo "Tambahakan Data Succsess <a href='index.php'>[ Home ] </a>";

			$nisn	= $_POST['nisn'];
			$nama_siswa	= $_POST['nama_siswa'];
			$jenis_kelamin	= $_POST['jenis_kelamin'];
			$foto	= "img/img-anime/img5.jpg";
			$alamat = $_POST['alamat'];

			echo $nisn." | ".$nama_siswa." | ".$jenis_kelamin." | ".$foto." | ".$alamat;




		} else if ($_POST['aksi'] == "edit"){
			echo "Edit Data Succsess <a href='index.php'>[ Home ]</a>";
				
		}
	}

	if (isset ($_GET['hapus'])) {
		echo "Hapus Data Succsess <a href='index.php'>[ Home ]</a>";
	}

 ?>
