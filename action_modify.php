<?php 
session_start();
$host = 'localhost';
$dbuser ='root';
$dbpassword = '';
$dbname = 'OurTime';
$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

if (!$con) {
    die("连接失败: " . mysqli_connect_error());
}


$Account = $_SESSION['Account'];
$Password = $_SESSION['Password'];

$sql = "SELECT * FROM User WHERE Account='$Account' AND password='$Password'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$Name = $_POST["Name"];
$email = $_POST["email"];
$Gender = $_POST["Gender"];
$Account_modified = $_POST["Account"];
$Password_modified = $_POST["Password"];

if (empty($_POST["Name"])) {
	$Name=$row['Name'];
}
if (empty($_POST["email"])) {
	$email=$row['email'];
}
if (empty($_POST["Gender"])) {
	$Gender=$row['Gender'];
}
if (empty($_POST["Account"])) {
	$Account_modified=$row['Account'];
}
else{
	$Account_modified = $_POST["Account"];
}
if (empty($_POST["Password"])) {
	$Password_modified =$row['password'];

}
else{
	$Password_modified = $_POST["Password"];

}



$sql = "UPDATE User SET Name='$Name',email='$email' ,Gender='$Gender' ,Account='$Account_modified' ,password='$Password_modified' WHERE Account='$Account' AND password='$Password'";


if (mysqli_query($con, $sql)) {
	$_SESSION['Account'] = $Account_modified;
	$_SESSION['Password'] = $Password_modified;
	header('Location: myworld.php');
    exit();
} else {
	echo "註冊失敗。";
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>
