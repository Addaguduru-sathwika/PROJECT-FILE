<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project sem6";
try {
$conn = new mysqli($servername,$username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
//reading values
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];


//insert code
$sql = "INSERT INTO data_insert VALUES
    ('$a','$b', '$c','$d','$e')";
if ($conn->query($sql) === TRUE) 
{
 echo '<script>alert("registered successfully")</script>';
 echo '<script>location.replace("registration.html")</script>';
 }
}
catch(PDOException $e)
{
	echo $sql."<br>".$e->getMessage();
}
$conn=null;



?>
