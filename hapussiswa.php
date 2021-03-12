<?php

	include_once ("koneksi.php");

	$id = $_GET['id'];

	$query = "DELETE from tsiswa WHERE id_siswa = $id";

	$hasil = mysqli_query($conn, $query);

	if ($hasil) {
		header('Location:index.php');
	}else{
		echo "Hapus data gagal!";
	}
?>