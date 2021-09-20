<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Silahkan Input Data</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
       <!-- Custom styles for this template -->
        <script src="aset/js/jquery.min.js"></script>
        <script src="aset/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
<fieldset>
  <form action="simpandata.php" method="post" enctype="multipart/form-data" name="FMHS">
    <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="40" align="center" bgcolor="#000099"><strong><font color="#FFFFFF">SILAHKAN INPUT DATA DENGAN BENAR</font></strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="1014" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="113">Nik</td>
              <td width="11">:</td>
              <td width="237"><input name="nik" type="text" id="nik" size="16" maxlength="16" required></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><input name="nama" type="text" id="nama" size="50" maxlength="50" required></td>
            </tr>
            <tr>
              <td>Kecamatan</td>
              <td>:</td>
              <td><form class="form-horizontal" method="post">

                                    <div class="form-group">
                                      <div class="col-sm-6">
                                            <!--provinsi-->
                                          <select id="kecamatan" class="form-control" name="kecamatan">
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
                                      </div>

            </tr>
            <tr>
              <td>Kelurahan</td>
              <td>:</td>
              <td><div class="col-sm-3">
                                            <!--kota-->
                                            <select id="kelurahan" class="form-control" name="kelurahan">
                                                <option value="">Please Select</option>
												<?php
												include "koneksiadmin.php";
												?>
                                                <?php
                                                    $query = mysqli_query($conn, "SELECT * FROM kelurahan INNER JOIN kecamatan ON kelurahan.id_kecamatan_fk = kecamatan.id_kecamatan ORDER BY kelurahan");
                                                    while ($row = mysqli_fetch_array($query)) { ?>

                                                    <option id="kelurahan" class="<?php echo $row['id_kecamatan']; ?>" value="<?php echo $row['id_kelurahan']; ?>">
                                                        <?php echo $row['kelurahan']; ?>
                                                    </option>

                                                <?php } ?>
                                            </select>
                                        </div>
            </tr>

            <tr>
              <td>Pemohon</td>
              <td>:</td>
              <td><input name="pemohon" type="text" id="pemohon" size="30" maxlength="30" required></td>
            </tr>
			<tr>
              <td>Keterangan</td>
              <td>:</td>
              <td><textarea name="keterangan" cols="30" rows="5" id="keterangan"></textarea></td>
			</tr>

            <tr>
              <td colspan="3" align="center"><input name="fok" type="submit" id="fok" value="Simpan">
            <input name="fulang" type="reset" id="fulang" value="Reset">            </tr>
			</fieldset>
        </table></td>
      </tr>
    </table>
  </form>
       <!-- Bootstrap core JavaScript
        ================================================== -->
        <script src="aset/js/bootstrap.min.js"></script>
        <script src="aset/js/jquery-chained.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="aset/js/ie10-viewport-bug-workaround.js"></script>
        <script>
            $(document).ready(function() {
                $("#kelurahan").chained("#kecamatan");
               
            });
        </script>
</body>
</html>