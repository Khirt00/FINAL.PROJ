<?php require_once("connection.php");?>
<!DOCTYPE html> 
<title>ASF Register</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="img/asf.png">
	<link rel="stylesheet" type="text/css" href="btn.css">
	<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="sub_file/register.css">
<body>
<form method="post">
<div class="con">
	<div class="container1">
		<div class="bottom1"></div>
		<div class="left1"></div>
		<div class="top1"></div>
	</div>
	<div class="container3">
		<div class="bottom3"></div>
		<div class="left3"></div>
		<div class="top3"></div>
	</div>
	<div class="container2">
		<div class="bottom2"></div>
		<div class="left2"></div>
		<div class="top2"></div>
	</div>
	<div class="container4">
		<div class="bottom4"></div>
		<div class="left4"></div>
		<div class="top4"></div>
	</div>
</div>


			<input name="first_name" class="fname" type="text" placeholder="First Name" required>
			<input name="last_name" class="lname" type="text" placeholder="Last Name" required>
			<input id="username" onkeyup="check_user()" name="username" class="user" type="text" placeholder="Username" required>	
			<input name="password" class="pass" type="password" placeholder="Password" required>
			

			<div class="btn">
				<div class="row">
					<div class="col-sm-6">
						<button style="float: right; margin-top: 5px;" name="register" type="submit" class="learn-more" id="register">SIGNUP</button>
					</div>
					<div class="col-sm-6">
						<button style="float: left; margin-top: 5px;" class="learn-more"><a   href="login.php">Login</a></button>
					</div>
				</div>
			</div>

				
		</form>

	</div>
	</div><br><br>
	<center>
		<div id="checking"></div>
	</center>	
	<?php 
		if (isset($_POST['register'])) {
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
		

		$q = "INSERT INTO `site` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES ('', '".$first_name."', '".$last_name."', '".$username."', '".$password."')";
		$r = mysqli_query($con, $q);

		if ($r) {
				header("location:login.php");
		}
		else{
			echo $q;
		}
		}
	?>
	<script src="sub_file/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		document.getElementById("register").disabled = true;
		function check_user(){
			var username =  document.getElementById("username").value;

			$.post("sub_file/user_check.php",
				{
					user: username
				},
					function(data, status){

					if(data == '<p style="color:red">User already registered</p>') {

						document.getElementById("register").disabled = true;
					}else{
						document.getElementById("register").disabled = false;
					}

					document.getElementById("checking").innerHTML = data;
						
				}

				);
		
		}
	</script>

</body>
</html>