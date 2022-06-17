<!DOCTYPE html>
<?php 
	session_start();
	$host = 'localhost';
	$dbuser ='root';
	$dbpassword = '';
	$dbname = 'OurTime';
	$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
	if (!$con) {
	    die("連接失敗: " . mysqli_connect_error());
	}
	$Account = $_SESSION['Account'];
	$Password = $_SESSION['Password'];
	$sql = "SELECT * FROM User WHERE Account='$Account' AND password='$Password'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result)
?>
<html>
<head>
	<meta charset="utf-8">
	<title>ModifyWorld</title>
	<link rel="stylesheet" type="text/css" href="worldcss.css" media="screen">
</head>
<style type="text/css">
	article{
			z-index: 2;
			background: rgba(255,255,255,0.60);
			display: block;
			position: fixed;
			left: 250px;
			padding: 20px 15px;
			width: 20%;
			height: 100%;
			line-height: 40px;
			text-align: center;
			font-family: Papyrus;
			box-shadow: 0px 0px 5px 5px #cccccc;
		}
</style>
<body>
	<div class="dropdown">
		<a href="myworld.html"><button class="dropbtn"><?php echo $row['Name'];  ?></button></a>
		<div class="dropdown-content">
			<a href="index.html">To Board</a>
			<a href="login.html">Sign out</a>
		</div>
	</div>
	<article>
		<form action="action_modify.php" method="POST">
		  <label>Name:</label>
		  <input type="text" name="Name"><br>
		  <label>email:</label>
		  <input type="text" name="email"><br><br>
		  <label>Gender:<br></label>
		  <input type="radio" name="Gender" value="1">Gentleman<br>
		  <input type="radio" name="Gender" value="2">Lady<br><br>
		  <label>Account:</label><br>
		  <input type="text" name="Account"><br>
		  <label>Password:</label><br>
		  <input type="Password" name="Password"><br><br>
		  <input type="submit" value="Submit">
		</form>
		
	</article>
</body>
</html>