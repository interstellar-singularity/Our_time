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
	$sql = "SELECT * FROM article ";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result)
?>
<html>
<head>
	<meta charset="utf-8">
	<title>文章</title>
	<link rel="stylesheet" type="text/css" href="iframecss.css" media="screen">
</head>
<body>
	<?php
		if (mysqli_num_rows($result) > 0) {
	    // 输出数据
		    while($row = mysqli_fetch_array($result)) {
		        echo "<h1>" . $row["topicName"]. "</h1>";
		        echo "<div>". $row["articleText"]. "</div>";
		    }
		}
	?>
<!-- 	<h1>標題</h1>
	<div>這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章</div>
	<h1>標題</h1>
	<div>這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章</div>
	<h1>標題</h1>
	<div>這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章</div>
	<h1>標題</h1>
	<div>這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章這裡是文章</div> -->
</body>
</html>