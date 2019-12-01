<?php 
session_start();
require_once("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>ASF Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="img/asf.png">
	<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="sub_file/login.css">
</head>
<style type="text/css">
	
</style>
<body>
	<form method="post">
		<div class="box1"></div>
		<span class="asf">WELCOME TO ASF | AS FUC...</span>
		<div class="a">No, It's not what you think</div>
		<div class="b">It's AICS student feedback</div>
		<div class="triangle-right"></div>
		<div class="triangle-left"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



				<input type="text" class="user" placeholder="Username" name="username">
				<input type="password" class="pass" placeholder="Password" name="password">
				<button class="login" type="submit" name="login">LOGIN</button>
				<button class="signup"><a href="register.php">SIGNUP</a></button>
		</form>


	<?php
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$q = 'SELECT * FROM `site` WHERE `username` = "'.$username.'" AND `password` = "'.$password.'"  ';

			$r = mysqli_query($con, $q);
			if ($r) {
				if (mysqli_num_rows($r) > 0){
					$_SESSION['username'] = $username;
					header("location:add.html");
				}else{
					echo '<p class="p">Your username and password do not matched<p>'; 
				}
			}else{
				echo $q; 
			}
		}
	?>

</body>
</html>