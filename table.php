<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="sub_file/table.css">
<body>
<a href="add.html">Add New Data</a> | <a href="chat.php">Message Someone</a><br/><br/>


	<div class="bbox3"></div>
	<div class="bbox2"></div>
	<div class="bbox1"></div>

	<div class="box4"></div>
	<div class="box3"></div>
	<div class="box1"></div>
	<div class="box2"></div>

	<div class="mbox4"></div>
	<div class="mbox3"></div>
	<div class="mbox2"></div>
	<div class="mbox1"></div>


	<table class="table" width='100%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Update</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>