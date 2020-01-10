<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
	<title>registration form.</title>
</head>
<body>
	<div class="logo">
		<h2><b><font size="30">SHOP NAME</font></b></h2>
	</div>

	<div class="navigation">
		<a href="">HOME</a>
		<a href="login.php">LOGIN</a>
		<a class="active" href="registration.php">REGISTER</a>
	</div>
	
	<?php
	require('db.php');
	// If form submitted, insert values into the database.
	if (isset($_REQUEST['username'])){
	// removes backslashes
	 $username = stripslashes($_REQUEST['username']);
	//escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
	$query = "INSERT into `users` (username, password, email, trn_date)
	VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
	$result = mysqli_query($con,$query);
	if($result){?>
		<div class="form">
			<table align="center">
				<tr height=30px></tr>
				<tr height=50px>
					<td><p>you have successfully registered.</P></td>
				</tr>
				<tr height=20px>
					<td><p>click here to <a href="login.php">login.</a></p></td>
				</tr>
			</table>
		</div>
	<?php }
	}else{ ?>

	<div class="form">
		<table align="center" width="350px">
			<th style="padding-top: 25px" height="50px"><h2 align="center"><font color="#4a4c50">registration form.</font></h2></th>
			<form name="registration" action="" method="post">
			<tr>
				<td height="50px" align="center"><input type="email" name="email" placeholder="e-mail" required /><br></td>
			</tr>
			<tr>
				<td height="50px" align="center"><input type="text" name="username" placeholder="username" required="true" /><br></td>
			</tr>
			<tr>
				<td height="50px" align="center"><input type="password" name="password" placeholder="password" required="true" /></td>
			</tr>
			<tr>
				<td style="padding-bottom: 15px" height="40px" align="center"><input class="btn btn-moreinfo" type="submit" name="submit" value="register" /></td>
			</tr>
			</form>
		</table>
	</div>
	<?php } ?>
</body>
</html>