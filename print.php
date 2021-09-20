 <?php
 include "koneksiadmin.php";
            //proses jika sudah klik tombol pencarian data
            if(isset($_POST['pencarian'])){
            //menangkap nilai form
            $tanggal_awal=$_POST['tanggal_awal'];
            $tanggal_akhir=$_POST['tanggal_akhir'];
            if(empty($tanggal_awal) || empty($tanggal_akhir)){
            //jika data tanggal kosong
            ?>
            <script language="JavaScript">
                alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
                document.location='utamaadmin.php?page=laporan';
            </script>
 <?php
            }else{
            ?>
 <style type="text/css">
<!--
.style1 {font-size: 18px}
.style11 {font-size: 14px}
.style14 {color: #000000; }
.style18 {font-family: Geneva, Arial, Helvetica, sans-serif; color: #000000; }
.style20 {
	font-size: 16px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style21 {font-size: 14px; font-weight: bold; }
-->
 </style>
 
 <p align="center" class="style20"><strong>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</strong></p>
 <p align="center" class="style20"><strong>JAKARTA TIMUR </strong></p>
 <p align="center" class="style1">------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
 <p class="style11"><i><b>Informasi : </b> Hasil pencarian data input Ktp periode Tanggal <b><?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
   <?php
            $query="select * from sudinjaktim1 where tgl between '$tanggal_awal' and '$tanggal_akhir'";
			$tampil = mysqli_query ($conn, $query);
            }
        ?>
 </p>
 </p>
 <table width="1160" border="1" align="center" cellpadding="0" cellspacing="0">
   <tr bgcolor="#FF6600">
<td height="34" bgcolor="#FFFFFF"><div align="center"><font face="Geneva, Arial, Helvetica, sans-serif"><strong>NO</strong></font></div></td>
<td bgcolor="#FFFFFF"><div align="center"><font face="Geneva, Arial, Helvetica, sans-serif"><strong>TGL</strong></font></div></td>
<td bgcolor="#FFFFFF"><div align="center"><font face="Geneva, Arial, Helvetica, sans-serif"><strong>NIK</strong></font></div></td>
<td bgcolor="#FFFFFF"><div align="center"><font face="Geneva, Arial, Helvetica, sans-serif"><strong>NAMA</strong></font></div></td>
<td bgcolor="#FFFFFF"><div align="center"><font face="Geneva, Arial, Helvetica, sans-serif"><strong>KELURAHAN</strong></font></div></td>
<td bgcolor="#FFFFFF"><div align="center"><font face="Geneva, Arial, Helvetica, sans-serif"><strong>KECAMATAN</strong></font></div></td>
<td bgcolor="#FFFFFF"><div align="center"><font face="Geneva, Arial, Helvetica, sans-serif"><strong>PEMOHON</strong></font></div></td>
<td bgcolor="#FFFFFF"><div align="center"><font face="Geneva, Arial, Helvetica, sans-serif"><strong>KETERANGAN</strong></font></div></td>
   </tr>
   <?php if(mysqli_num_rows($tampil)>0){ ?>
   <?php
    $no = 1;
            //menampilkan pencarian data
            while($data=mysqli_fetch_array($tampil)){
            ?>
   <tr>
     <td height="38" class="style14"><div align="center" class="style18">
	   <div align="center"><?php echo $no ?></td>
     <td height="38" class="style14"><div align="center" class="style18">
       <div align="center"><?php echo $data["tgl"];?></div>
     </div></td>
     <td class="style14"><div align="center" class="style18">
       <div align="center"><?php echo $data["nik"];?></div>
     </div></td>
     <td class="style14"><div align="center" class="style18">
       <div align="center"><?php echo $data["nama"];?></div>
     </div></td>
     <td class="style14"><div align="center" class="style18">
       <div align="center"><?php echo $data["kelurahan"];?></div>
     </div></td>
     <td class="style14"><div align="center" class="style18">
       <div align="center"><?php echo $data["kecamatan"];?></div>
     </div></td>
     <td class="style14"><div align="center" class="style18">
       <div align="center"><?php echo $data["pemohon"];?></div>
     </div></td>
	     <td class="style14"><div align="center" class="style18">
       <div align="center"><?php echo $data["keterangan"];?></div>
     </div></td>
   </tr>
    <?php $no++; } ?>
   <?php
            }
            ?>
   <tr>
     <td height="20" colspan="4" align="center"><?php
                //jika pencarian data tidak ditemukan
                if(mysqli_num_rows($tampil)==0){
                    echo "<font color=red><blink>Pencarian data tidak ditemukan!</blink></font>";
                }
                ?>     </td>
   </tr>
 </table>
 <script>
		window.print();
	</script>
        <p align="center">
          <?php
        }
        else{
            unset($_POST['pencarian']);
        }
        ?>
          <a href="utamaadmin.php?page=laporan" class="style21"> &lt; Kembali &gt; </a></p>
        <iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;"></iframe>
    </body>
</html>