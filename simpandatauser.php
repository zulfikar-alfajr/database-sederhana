<?php

include "koneksiadmin.php";
   date_default_timezone_set('Asia/Jakarta');
   $tgl = date("Y-m-d");
   $nama= $_POST['nama'];
   $username= $_POST['username'];
   $password= $_POST['password'];
   
   
$simpan  = "INSERT into admin (tgl,nama, username, password) VALUES ('$tgl','$nama','$username','$password')";

 $result  = mysqli_query($conn, $simpan);
if($result){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Berhasil disimpan, mohon di catat !!!');document.location='utamaadmin.php?page=register'</script>";
    }else{  //jika simpan gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='utamaadmin.php?page=register'</script>";
    }
?>