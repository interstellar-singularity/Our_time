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
	if ($_POST["Account"]) {
		$_SESSION['Account'] = $_POST["Account"];
		$_SESSION['Password'] = $_POST["Password"];
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
	<title>大學生</title>
	<link rel="stylesheet" type="text/css" href="indexcss.css" media="screen">
</head>
<style type="text/css">
	
</style>
<body>
	<div class="dropdown">
		<a href="myworld.php"><button class="dropbtn" ><?php echo $row['Name'];  ?></button></a>
		<div class="dropdown-content">
			<a href="myworld.php">My data</a>
			<a href="pages/femw.html" target="myframe">I ask that...</a>
			<a href="pages/femw.html" target="myframe">I answer that...</a>
			<a href="login.html">Sign out</a>
		</div>
	</div>
	<h1>Our Time</h1>
	<article>
		<iframe id="model" width="100%" height="100%" src="arti.html"></iframe>
	</article>
	<iframe id="contain" src="topic.php" name="myframe"></iframe>
</body>
</html>