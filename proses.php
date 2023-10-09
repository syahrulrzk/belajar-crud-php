<?php 
	if(isset ($_POST['aksi'])) {
		if($_POST['aksi'] == "add"){
			echo "Tambahakan Data Succsess <a href='index.php'>[ Home ] </a>";
		} else if ($_POST['aksi'] == "edit"){
			echo "Edit Data Succsess <a href='index.php'>[ Home ]</a>";
				
		}
	}

	if (isset ($_GET['hapus'])) {
		echo "Hapus Data Succsess <a href='index.php'>[ Home ]</a>";
	}

 ?>
