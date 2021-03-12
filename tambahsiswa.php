<html>
<head>
	<title>Tambah Siswa</title>
</head>
<body>
	<center>
		<h1>Tambah Siswa</h1>
		<form method="post" action="prosestambahsiswa.php">
		<table>
			<tr>
				<td>NIS</td>
				<td> <input type="text" name="nis" placeholder="Masukkan nis"/> </td>
			</tr>
			<tr>
				<td>Nama</td>
				<td> <input type="text" name="nama" placeholder="Masukkan nama"/> </td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> <input type="text" name="alamat" placeholder="Masukkan alamat"/> </td>
			</tr>
			<tr>
				<td>No. HP</td>
				<td> <input type="number" name="nohp" placeholder="Masukkan no hp"/> </td>
			</tr>
			<tr>
				<td>Email</td>
				<td> <input type="email" name="email" placeholder="Masukkan email"/> </td>
			</tr>
			<tr>
				<td></td>
				<td> <input type="submit" value="Tambah Data" /> </td>
			</tr>
		</table>
		</form>
	</center>
</body>
</html>