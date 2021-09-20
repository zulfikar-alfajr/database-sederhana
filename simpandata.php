<?php

include "koneksiadmin.php";
   date_default_timezone_set('Asia/Jakarta');
   $tgl = date("Y-m-d");
   $nik = $_POST['nik'];
   $nama= $_POST['nama'];
   $kelurahan= $_POST['kelurahan'];
   $kecamatan= $_POST['kecamatan'];
   $pemohon= $_POST['pemohon'];
   $keterangan= $_POST['keterangan'];
   
   
$simpan  = "INSERT into sudinjaktim1 (tgl,nik, nama, kelurahan, kecamatan, pemohon, keterangan ) VALUES ('$tgl','$nik','$nama','$kelurahan','$kecamatan','$pemohon','$keterangan')";

 $result  = mysqli_query($conn, $simpan);
if($result){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Berhasil disimpan');document.location='utamaadmin.php?page=input'</script>";
    }else{  //jika simpan gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='utamaadmin.php?page=input'</script>";
    }
?>