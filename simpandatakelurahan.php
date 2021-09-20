<?php

include "koneksiadmin.php";
   $id_kelurahan= $_POST['id_kelurahan'];
   $id_kecamatan_fk= $_POST['id_kecamatan_fk'];
   $kelurahan=$_POST['kelurahan'];
   
   
$simpan  = "INSERT into kelurahan (id_kelurahan, id_kecamatan_fk, kelurahan) VALUES ('$id_kelurahan','$id_kecamatan_fk','$kelurahan')";

 $result  = mysqli_query($conn, $simpan);
if($result){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Berhasil disimpan');document.location='utamaadmin.php?page=datawilayah'</script>";
    }else{  //jika simpan gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='utamaadmin.php?page=datawilayah'</script>";
    }
?>