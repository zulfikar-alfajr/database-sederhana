<?php
include "koneksiadmin.php";

$id = $_GET['id'];
$hapus = "DELETE FROM administrator WHERE username='$id'";
$result  = mysqli_query($conn, $hapus);
if($result){ //jika berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Berhasil dihapus');document.location='utamaadmin.php?page=dataregister'</script>";
    }else{  //jika simpan gagal maka muncul pesan
         echo "<script>alert('Gagal Hapus, coba kembali');document.location='utamaadmin.php?page=dataregister'</script>";
    }
?>