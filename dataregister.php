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
        <td width="1307" height="40"><div align="center" class="style4">DAFTAR LOGIN USER YANG TELAH DIBUAT </div></td>
      </tr>
</table>
	<table id="vikar" border="1" class="display" cellspacing="0" width="100%">
	  <thead>
          <tr>
		    
            <th width="10%">TGL</th>
            <th width="20%">NAMA</th>
            <th width="20%">USERNAME</th>
			<th width="20%">PASSWORD</th>
			<th width="19%">Tindakan</th>
          </tr>
      </thead>
      <tbody>
<?php
 include "koneksiadmin.php";
	 $query = "SELECT * FROM admin ORDER BY username";
	 $tampil = mysqli_query ($conn, $query);
?>
	<?php
            
            while($data = mysqli_fetch_array($tampil)){
        ?>
 		<tr>
          
		  <td><div align="center"><?php echo $data["tgl"];?></div></td>
		   <td><div align="center"><?php echo $data["nama"];?></div></td>
		  <td><div align="center"><?php echo $data["username"];?></div></td>
          <td><div align="center"><?php echo $data["password"];?></div></td>
		   <td>
      <div align="center"><font face="Courier New, Courier, monospace"><strong><a href="deleteuser.php?id=<?php echo $data['username']; ?>">Hapus</a> |
        <a href="edituser.php?id=<?php echo $data['username']; ?>">Edit</a> </strong></font></div></td>
        </tr>
 <?php } ?>
      </tbody>
</table>
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
        <td width="1307" height="40"><div align="center" class="style4">DAFTAR LOGIN ADMINISTRATOR YANG TELAH DIBUAT </div></td>
      </tr>
</table>
	<table id="vikarfajri" border="1" class="display" cellspacing="0" width="100%">
	  <thead>
          <tr>
		    
            <th width="10%">TGL</th>
            <th width="20%">NAMA</th>
            <th width="20%">USERNAME</th>
			<th width="20%">PASSWORD</th>
			<th width="19%">Tindakan</th>
          </tr>
      </thead>
      <tbody>
<?php
 include "koneksiadmin.php";
	 $query = "SELECT * FROM administrator ORDER BY username";
	 $tampil = mysqli_query ($conn, $query);
?>
	<?php
            
            while($data = mysqli_fetch_array($tampil)){
        ?>
 		<tr>
          
		  <td><div align="center"><?php echo $data["tgl"];?></div></td>
		   <td><div align="center"><?php echo $data["nama"];?></div></td>
		  <td><div align="center"><?php echo $data["username"];?></div></td>
          <td><div align="center"><?php echo $data["password"];?></div></td>
		   <td>
      <div align="center"><font face="Courier New, Courier, monospace"><strong><a href="deleteadministrator.php?id=<?php echo $data['username']; ?>">Hapus</a> |
        <a href="editadministrator.php?id=<?php echo $data['username']; ?>">Edit</a> </strong></font></div></td>
        </tr>
 <?php } ?>
      </tbody>
</table>
</body>
  </html>