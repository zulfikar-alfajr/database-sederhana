<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Form Register User</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<fieldset>
<form action="simpandatauser.php" method="post" enctype="multipart/form-data" name="FMHS">
    <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="40" align="center" bgcolor="#000099"><strong><font color="#FFFFFF">Form Register User Admin</font></strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="1014" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><input name="nama" type="text" id="nama" size="50" maxlength="50" required></td>
            </tr>
            <tr>
              <td>Username</td>
              <td>:</td>
              <td><input name="username" type="text" id="username" size="20" maxlength="20" required></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>:</td>
              <td><input name="password" type="text" id="password" size="20" maxlength="20" required></td>
            </tr>

            <tr>
              <td colspan="3" align="center"><input name="fok" type="submit" id="fok" value="Simpan">
            <input name="fulang" type="reset" id="fulang" value="Reset">            </tr>
			</fieldset>
        </table></td>
      </tr>
    </table>
  </form>
 
 
  <p>&nbsp;</p>
  <form action="simpandataadministrator.php" method="post" enctype="multipart/form-data" name="FMHS">
    <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="40" align="center" bgcolor="#000099"><strong><font color="#FFFFFF">Form Register Administrator </font></strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="1014" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><input name="nama" type="text" id="nama" size="50" maxlength="50" required></td>
            </tr>
            <tr>
              <td>Username</td>
              <td>:</td>
              <td><input name="username" type="text" id="username" size="20" maxlength="20" required>
              <em>              <font color="#FF0000" size="-1">*(Harus berupa angka)</font></em></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>:</td>
              <td><input name="password" type="text" id="password" size="20" maxlength="20" required>
                <em><font color="#FF0000" size="-1">*(Harus berupa angka) </font></em></td>
            </tr>

            <tr>
              <td colspan="3" align="center"><input name="fok" type="submit" id="fok" value="Simpan">
            <input name="fulang" type="reset" id="fulang" value="Reset">            </tr>
			</fieldset>
        </table></td>
      </tr>
    </table>
  </form>
</body>
</html>