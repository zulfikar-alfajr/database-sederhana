<?php 
 
include "koneksiadmin.php";
$id= $_GET['id'];
$nama = $_GET['nama'];
$kelurahan = $_GET['kelurahan'];
$kecamatan = $_GET['kecamatan'];
$pemohon = $_GET['pemohon'];
$keterangan = $_GET['keterangan']; 
 
$update = "UPDATE sudinjaktim1 SET nama='$nama',
							 kelurahan='$kelurahan', 
							 kecamatan='$kecamatan', 
							 pemohon='$pemohon',
							 keterangan='$keterangan'
							 WHERE nik='$id'";
$hasil = mysqli_query($conn, $update);

if ($hasil) {
			header("location:utamaadmin.php?page=cari");
			}
else { echo "Update Data Gagal"; }
?>