<!DOCTYPE html>
<html>
<head>
	<title>Sistem Penginputan LPK Sudin Jaktim</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
    <style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-style: italic;
	font-size: 14px;
}
-->
    </style>
</head>
<body>
<!-- 
-->
<div class="content">
	<header>
		<h1 align="center" class="judul">ADMINISTRATOR SISTEM LPK</h1>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="utamaadmin.php?page=awal"><strong>HOME</strong></a></li>
			<li><a href="utamaadmin.php?page=input"><strong>INPUT DATA</strong></a></li>
			<li><a href="utamaadmin.php?page=cari"><strong>CARI DATA</strong></a></li>
			<li><a href="utamaadmin.php?page=laporan"><strong>LAPORAN</strong></a></li>
			<li><a href="utamaadmin.php?page=register"><strong>REGISTER</strong></a></li>
			<li><a href="utamaadmin.php?page=dataregister"><strong>DATA REGISTER</strong></a></li>
			<li><a href="utamaadmin.php?page=datawilayah"><strong>DATA WILAYAH</strong></a></li>
			<li><a href="utamaadmin.php?page=logout"><strong> LOGOUT</strong></a></li>
						
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'awal':
				include "awal.php";
				break;
			case 'input':
				include "input.php";
				break;
			case 'cari':
				include "cari.php";
				break;
			case 'laporan':
				include "laporan.php";
				break;
			case 'register':
				include "register.php";
				break;
			case 'dataregister':
				include "dataregister.php";
				break;
			case 'datawilayah':
				include "datawilayah.php";
				break;
			case 'logout':
				include "logout.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "awal.php";
	}
 
	 ?>
 
	<div id="footer">
	<p align="center" class="style1">Copyright  Design by Zulfikar System 2019</p>
</div>
</body>
</html>