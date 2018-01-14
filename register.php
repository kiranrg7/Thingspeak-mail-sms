 <?php

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "servelots";

$name = $email = $user_name = $pwd="";
$phno=0;
$user_name=$_POST["uname"];
$name=$_POST["name"];
$email=$_POST["mailid"];
$pwd=$_POST["pwd"];
$phno=$_POST["phno"];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user (uname, pwd,name, email,phno) VALUES('$user_name',password('$pwd'),'$name','$email','$phno')";

if ($conn->query($sql) === TRUE) {
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Successfully Registered');
    window.location.href='index.html';
    </script>");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
