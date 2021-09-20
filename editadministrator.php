<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style5 {
	font-size: 14px;
	font-weight: bold;
}
.style6 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="717" height="55" border="1" align="center">
      <tr bgcolor="#000099">
        <td width="650" height="49"><div align="center" class="style6">SILAHKAN EDIT DATA ANDA DENGAN BENAR </div></td>
      </tr>
</table><?php
include "koneksiadmin.php";
$id = $_GET ['id'];
$edit = " SELECT * FROM administrator where username='$id'";
$hasil= mysqli_query($conn, $edit);
$r = mysqli_fetch_array($hasil);

?>
<form id="form1" name="id" method="get" action="updateadministrator.php">
  <table width="717" height="299" border="1" align="center">
    <tr>
	   <input type="hidden" name="id" value="<?php echo $r['username'] ?>">
      </label></td>
    </tr>
        <tr>
      <td width="206">Nama</td>
      <td width="14">:</td>
      <td width="475"><label>
        <input name="nama" type="text" id="nama" value="<?php echo $r['nama'];?>" />
      </label></td>
    </tr>
        <tr>
      <td width="206">Password</td>
      <td width="14">:</td>
      <td width="475"><label>
        <input name="password" type="text" id="password" value="<?php echo $r['password'];?>" />
      </label></td>
    </tr>
       <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><label>
      <input type="submit" name="button" id="button" value="Update" />
      <input name="username" type="hidden" id="username" value="<?php echo $r[username];?>" />
      ||     
      <span class="style5"><a href="utamaadmin.php?page=dataregister">BATAL </a></span></label></td>
    </tr>
  </table>
</form>
</body>
</html>