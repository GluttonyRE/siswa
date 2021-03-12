<?php 
	error_reporting(0);
	include_once ("koneksi.php");

	$id = $_GET['id'];

	$query = "SELECT * FROM tsiswa WHERE id_siswa = " . $id;

	$hasil = mysqli_query($conn, $query);

 ?>
<html>
<head>
	<title>Ubah Data Siswa</title>
</head>
<body>
	<center>
 		<h1>Ubah Data Siswa</h1>
		<form method="post" action="proseseditsiswa.php">

		<?php while($data = mysqli_fetch_array($hasil)) { ?>

		<table>
			<tr>
				<td>NIS</td>
				<td> <input type="text" name="nis" value="<?php echo $data['nis'] ?>" /> </td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> <input type="text" name="nama" value="<?php echo $data['nama'] ?>"/> </td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"/> </td>
			</tr>
			<tr>
				<td>No. HP</td>
				<td> <input type="number" name="nohp" value="<?php echo $data['nohp'] ?>"/> </td>
			</tr>
			<tr>
				<td>Email</td>
				<td> <input type="text" name="email" value="<?php echo $data['email'] ?>"/> </td>
			</tr>
			<tr>
				<td></td>
				<td> 
					<input type="hidden" name="id" value="<?php echo $data['id_siswa'] ?>">
					<input type="submit" value="Ubah Data" /> </td>
			</tr>
		</table>

		<?php } ?>

		</form>
	</center>
</body>
</html>