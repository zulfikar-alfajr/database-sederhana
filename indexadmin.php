<!DOCTYPE html>
<html>
<head>
<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
    <style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-style: italic;
}
-->
    </style>
</head>
<body>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p><br/>
	    <br/>
    </p>
	<center>
	  <h2>LOGIN ADMINISTRATOR SISTEM LPK</h2>
	</center>	

<div class="login">
	  <form action="loginadmin.php" method="post" onSubmit="return validasi()"><div>
	  <label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
		<div>
				<input type="submit" value="Login" class="tombol">
	  || <a href="../index.php">Halaman User 
	  </a>
	  </form>
</div>
    </body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>