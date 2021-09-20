<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Form Register User</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<fieldset>
<form action="simpandatakecamatan.php" method="post" enctype="multipart/form-data" name="FMHS">
    <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="40" align="center" bgcolor="#000099"><strong><font color="#FFFFFF"> Input Kecamatan </font></strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="1014" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="251">ID Kecamatan</td>
              <td width="24">:</td>
              <td width="709"><input name="id_kecamatan" type="text" id="id_kecamatan" size="20" maxlength="20" required>
                <font color="#FF0000" size="-1"><em>*Sama dengan nama kecamatan </em></font></td>
            </tr>
            <tr>
              <td>Kecamatan</td>
              <td>:</td>
              <td><input name="kecamatan" type="text" id="kecamatan" size="20" maxlength="20" required></td>
            </tr>

            <tr>
              <td colspan="3" align="center"><input name="fok" type="submit" id="fok" value="Simpan">
            <input name="fulang" type="reset" id="fulang" value="Reset">            </tr>
			</fieldset>
        </table></td>
      </tr>
    </table>
</form>
 .

<html>
	<head>
<link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="media/js/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    oTable = $('#vikar').DataTable({
	"bJQueryUI": true,
	"sPaginationType": "full_numbers"
} );
})
</script>
	<style type="text/css">
<!--
.style4 {
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style5 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
    </style>
	</head>
<body>
	<table width="100%" height="47" border="1">
      <tr bgcolor="#000099">
        <td width="1307" height="40"><div align="center" class="style4">DAFTAR KECAMATAN </div></td>
      </tr>
</table>
	<table id="vikar" border="1" class="display" cellspacing="0" width="100%">
	  <thead>
          <tr>
		    
            <th width="20%">KECAMATAN</th>
			<th width="19%">Tindakan</th>
          </tr>
      </thead>
      <tbody>
<?php
 include "koneksiadmin.php";
	 $query = "SELECT * FROM kecamatan ORDER BY id_kecamatan";
	 $tampil = mysqli_query ($conn, $query);
?>
	<?php
            
            while($data = mysqli_fetch_array($tampil)){
        ?>
 		<tr>
		   <td><div align="center"><?php echo $data["kecamatan"];?></div></td>
		   <td>
      <div align="center"><font face="Courier New, Courier, monospace"><strong><a href="deletedatakecamatan.php?id=<?php echo $data['id_kecamatan']; ?>">Hapus</a>
        </tr>
 <?php } ?>
      </tbody>
</table>
</body>
  </html>
 .
 
  <p>&nbsp;</p>
  <form action="simpandatakelurahan.php" method="post" enctype="multipart/form-data" name="FMHS">
    <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="40" align="center" bgcolor="#000099"><strong><font color="#FFFFFF">Input Kelurahan </font></strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="1014" border="0" align="" cellpadding="5" cellspacing="0">
            <tr>
              <td width="256">ID Kelurahan</td>
              <td width="26">:</td>
              <td width="702"><input name="id_kelurahan" type="text" id="id_kelurahan" size="20" maxlength="20" required>
                <font color="#FF0000" size="-1"><em>  *Sama dengan nama kelurahan</em></font> </td>
            </tr>
            <tr>
              <td>ID Kecamatan</td>
              <td>:</td>
                    <td><form class="form-horizontal" method="post">

                                    <div class="form-group">
                                      <div class="col-sm-6">
                                            <!--provinsi-->
                                          <select id="id_kecamatan_fk" class="form-control" name="id_kecamatan_fk">
                                                <option value="">Please Select</option>
                                                <?php
												include "koneksiadmin.php";
												?>
												<?php
                                                    $query = mysqli_query($conn, "SELECT * FROM kecamatan ORDER BY kecamatan");
                                                    while ($row = mysqli_fetch_array($query)) { ?>

                                                    <option value="<?php echo $row['id_kecamatan']; ?>">
                                                        <?php echo $row['kecamatan']; ?>
                                                    </option>

                                                <?php } ?>
                                        </select>
            </tr>
            <tr>
              <td>Kelurahan</td>
              <td>:</td>
              <td><input name="kelurahan" type="text" id="kelurahan" size="30" maxlength="30" required></td>
            </tr>

            <tr>
              <td colspan="3" align="center"><input name="fok" type="submit" id="fok" value="Simpan">
            <input name="fulang" type="reset" id="fulang" value="Reset">            </tr>
			</fieldset>
        </table></td>
      </tr>
    </table>
  </form>
          <script>
            $(document).ready(function() {
                $("#kelurahan").chained("#kecamatan");

</body>
</html>
.

<html>
	<head>
<link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="media/js/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    oTable = $('#vikarfajri').DataTable({
	"bJQueryUI": true,
	"sPaginationType": "full_numbers"
} );
})
</script>
	<style type="text/css">
<!--
.style4 {
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style5 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
    </style>
	</head>
<body>
	<table width="100%" height="47" border="1">
      <tr bgcolor="#000099">
        <td width="1307" height="40"><div align="center" class="style4">DAFTAR KELURAHAN </div></td>
      </tr>
</table>
	<table id="vikarfajri" border="1" class="display" cellspacing="0" width="100%">
	  <thead>
          <tr>
            <th width="20%">KELURAHAN</th>
			<th width="19%">Tindakan</th>
          </tr>
      </thead>
      <tbody>
<?php
 include "koneksiadmin.php";
	 $query = "SELECT * FROM kelurahan ORDER BY id_kelurahan";
	 $tampil = mysqli_query ($conn, $query);
?>
	<?php
            
            while($data = mysqli_fetch_array($tampil)){
        ?>
 		<tr>
		   <td><div align="center"><?php echo $data["kelurahan"];?></div></td>
		   <td>
      <div align="center"><font face="Courier New, Courier, monospace"><strong><a href="deletedatakelurahan.php?id=<?php echo $data['id_kelurahan']; ?>">Hapus</a></strong></font></div></td>
        </tr>
 <?php } ?>
      </tbody>
</table>
</body>
  </html>