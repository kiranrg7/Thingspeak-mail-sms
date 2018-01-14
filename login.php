<?php
session_start();
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "servelots";

$user_name=$_POST["uname"];
$pwd=$_POST["pwd"];
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,password(pwd) FROM user  Where uname='$user_name' and pwd= (select password('$pwd'));";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
	 
	 $row = $result->fetch_assoc();
	 $_SESSION["name"] = $row["name"];
	 header('Location:data_display.php');
	 
}

else
{
	 
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('invalid credentials');
    window.location.href='index.html';
    </script>");
}	

