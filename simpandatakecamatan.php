<?php

include "koneksiadmin.php";
   $id_kecamatan= $_POST['id_kecamatan'];
   $kecamatan= $_POST['kecamatan'];
   
   
$simpan  = "INSERT into kecamatan (id_kecamatan, kecamatan) VALUES ('$id_kecamatan','$kecamatan')";

 $result  = mysqli_query($conn, $simpan);
if($result){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Berhasil disimpan');document.location='utamaadmin.php?page=datawilayah'</script>";
    }else{  //jika simpan gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='utamaadmin.php?page=datawilayah'</script>";
    }
?>