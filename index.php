<?php
	error_reporting(0);
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Siswa</title>
</head>
<body>
	<h2>Data Siswa</h2>

	<form action="" method="POST">
		<input type="text" name="query" placeholder="Cari Data"/>
		<input type="submit" name="cari" value="Search"/>
	</form><br>
	
	<a href="tambahsiswa.php">Tambah Siswa</a>
	<br>
    <br>

	<table border="1" cellspacing="0" width="800px">
		<tr>
			<th>NO</th>
			<th>NIS</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>NO HP</th>
			<th>EMAIL</th>
            <th>Aksi</th>
		</tr>
		<?php
		$no = 1;

		$query = $_POST['query'];
		if ($query != '') {
			$select = mysqli_query($conn, "SELECT * FROM tsiswa WHERE nis LIKE '%".$query."%' OR nama LIKE '%".$query."%' OR alamat LIKE '%".$query."%' OR nohp LIKE '%".$query."%' OR email LIKE '%".$query."%' ");
		}else{
			$select = mysqli_query($conn, "SELECT * FROM tsiswa");
		}

		if (mysqli_num_rows($select )) {
		
		while ($baris = mysqli_fetch_array($select)) {
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $baris['nis']  ?></td>
			<td><?php echo $baris['nama']  ?></td>
			<td><?php echo $baris['alamat']  ?></td>
			<td><?php echo $baris['nohp']  ?></td>
			<td><?php echo $baris['email']  ?></td>
			<td> <a href="ubahsiswa.php?id=<?php echo $baris ['id_siswa'] ?>"> Ubah </a>
			|
			<a href="hapussiswa.php?id=<?php echo $baris ['id_siswa'] ?>" 
            	onclick="return confirm('Apakah anda yakin akan menghapus siswa dengan nis <?php echo $baris['nis']; ?> ?')"> Hapus </a>
			</td>
		</tr>

		<?php }}else{
			echo '<tr><td colspan="7">Tidak ada data</td></tr>';
			} ?>
	</table>
</body>
</html>