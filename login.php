<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
	<title>login form.</title>
</head>
<body>
<body>
	<div class="logo">
		<h2><b><font size="30">SHOP NAME</font></b></h2>
	</div>

	<div class="navigation">
		<a href="">HOME</a>
		<a class="active" href="login.php">LOGIN</a>
		<a href="registration.php">REGISTER</a>
	</div>

		<?php
		require('db.php');
		session_start();
		// If form submitted, insert values into the database.
		if (isset($_POST['username'])){
		// removes backslashes
		$username = stripslashes($_REQUEST['username']);
		//escapes special characters in a string
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		//Checking is user existing in the database or not
		$query = "SELECT * FROM `users` WHERE username='$username'
		and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows==1){
		$_SESSION['username'] = $username;
		// Redirect user to index.php
		header("Location: index.php");
		}else{
		echo "<div class='form'>
		<h3>Username/password is incorrect.</h3>
		<br/>Click here to <a href='login.php'>Login</a></div>";
		}
		}else{
		?>
	
	<div class="form">
		<table align="center" width="280px">
			<th style="padding-top: 25px" height="50px"><h2 align="center"><font color="#4a4c50">login form.</font></h2></th>
			<form action="" method="post" name="login">
			<tr>
				<td height="50px" align="center"><input type="text" name="username" placeholder="username" required="true" /><br></td>
			</tr>
			<tr>
				<td height="50px" align="center"><input type="password" name="password" placeholder="password" required="true" /><br></td>
			</tr>
			<tr>
				<td style="padding-bottom: 15px" height="40px" align="center"><input class="btn btn-moreinfo" name="submit" type="submit" value="login" /></td>
			</tr>
			<tr bgcolor="white">
				<td align="center"><p><font size="2.5">not registered yet? <a class="badge-register" href='registration.php'>register here.</a></font></p></td>
			</tr>
			</form>
		</table>
	</div>
	<?php } ?>
</body>
</html>