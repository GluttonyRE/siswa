<?php 
	error_reporting(0);
	include_once ("koneksi.php");

	$id = $_POST['id'];
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$email = $_POST['email'];

	$query = "UPDATE tsiswa SET nis = '$nis', nama = '$nama', alamat = '$alamat', nohp = $nohp, email = '$email' WHERE id_siswa = $id";

	$hasil = mysqli_query($conn, $query);

	if ($hasil) {
		header('Location:index.php');
	}else{
		echo "Update data gagal!";
	}

?>