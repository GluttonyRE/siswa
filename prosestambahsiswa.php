<?php

error_reporting(0);
include_once("koneksi.php");

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

$query = "INSERT INTO tsiswa (nis, nama, alamat, nohp, email) 
        VALUE ('$nis', '$nama', '$alamat', '$nohp', '$email') ";

$hasil = mysqli_query($conn, $query);

if($hasil){
    header('Location:index.php');
}else{
    echo "Input data gagal";
}