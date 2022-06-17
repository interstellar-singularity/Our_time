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
	<title>MyWorld</title>
	<link rel="stylesheet" type="text/css" href="worldcss.css" media="screen">
</head>

<body>
	<div class="dropdown">
		<a href="myworld.php"><button class="dropbtn"><?php echo $row['Name'];  ?></button></a>
		<div class="dropdown-content">
			<a href="index.php">To Board</a>
			<a href="login.html">Sign out</a>
		</div>
	</div>
	<article class="ar">
		<div>Name: <?php echo $row['Name']; ?></div>
		<div>Email: <?php echo $row['email']; ?></div>
		<div>Gender: <?php 
		if($row['Gender']=='1') {
			echo "Gentleman";
		}
		elseif ($row['Gender']=='2') {
		 	echo "Lady";
		 } ?></div>
		<div>Account: <?php echo $row['Account']; ?></div>
		<a href="modify.php" class="a1">Modify...</a>
	</article>
</body>
</html>