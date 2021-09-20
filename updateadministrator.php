<?php 
 
include "koneksiadmin.php";
$id= $_GET['id'];
$nama = $_GET['nama'];
$password = $_GET['password'];
 
$update = "UPDATE administrator SET nama='$nama',
							 password='$password'
							 WHERE username='$id'";
$hasil = mysqli_query($conn, $update);

if ($hasil) {
			header("location:utamaadmin.php?page=dataregister");
			}
else { echo "Update Data Gagal"; }
?>