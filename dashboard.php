<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div class="logo">
		<h2><b><font size="30">SHOP NAME</font></b></h2>
	</div>

	<div class="navigation">
		<a href="index.php">HOME</a>
		<a class="active" href="">DASHBOARD</a>
		<a href="logout.php">LOGOUT</a>
	</div>
	
	<?php 
		$username_key = $_SESSION['username'];
		$query_user = mysqli_query($con, "SELECT * FROM users WHERE username = '$username_key'");
		$data  = mysqli_fetch_array($query_user);
	?>

	<div class="customerinfo">
		<table bgcolor="#6d7993">
			<tr>
				<td>
				user information.
				</td>
			</tr>
			<tr>
				<td>e-mail:</td>
				<td><?= $data['email']?></td>
			</tr>
		</table>
	</div>
</body>
</html>