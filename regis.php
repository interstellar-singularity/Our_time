<!DOCTYPE html>
<?php 
$host = 'localhost';
$dbuser ='root';
$dbpassword = '';
$dbname = 'OurTime';
$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if (!$con) {
    die("連接失敗: " . mysqli_connect_error());
}
//創建資料庫
// $sql = "CREATE DATABASE ". $dbname;
// if(mysqli_query($con,$sql)){
// 	echo "資料庫創建成功！";
// }
// else{
// 	echo "failed!" . mysqli_error($con);
// }

// 創建訂單資訊
// $sql = "CREATE TABLE User (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// Name VARCHAR(20) NOT NULL,
// email VARCHAR(30) NOT NULL,
// Account VARCHAR(30) NOT NULl,
// password VARCHAR(30) NOT NULL,
// Gender INT(1) DEFAULT 1)";

// if (!mysqli_query($con,$sql)){
// 	 echo "错误描述: " . mysqli_error($con); 
// }
?>
<html>
<head>
	<meta charset="utf-8">
	<title>大學生</title>
	<link rel="stylesheet" type="text/css" href="regiscss.css">
</head>
<body>
	<h1 class="h">Our Time</h1>
	<article>
		<h1> Welcome to join<br> Our Time...<br></h1>
		- - - - - - - - - - - - - - -<br>
		<form action="action_page.php" method="post">
		  <label>Name:</label>
		  <input type="text" name="Name"><br>
		  <label>email:</label>
		  <input type="email" name="email"><br><br>
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