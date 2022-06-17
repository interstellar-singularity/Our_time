<?php 
$host = 'localhost';
$dbuser ='root';
$dbpassword = '';
$dbname = 'OurTime';
$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

if (!$con) {
    die("连接失败: " . mysqli_connect_error());
}

$Name = $_POST["Name"];
$email = $_POST["email"];
$Gender = $_POST["Gender"];
$Account = $_POST["Account"];
$Password = $_POST["Password"];

$sql = "INSERT INTO User (Name, email, Gender, Account, password)
VALUES ('$Name', '$email', '$Gender', '$Account', '$Password')";


if (mysqli_query($con, $sql)) {
	header('Location: login.html');
    exit();
    // echo "訂購成功！";
} else {
	echo "註冊失敗。";
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>


<!-- <meta charset="utf-8" http-equiv="refresh" content="0;
url=login.php"> -->