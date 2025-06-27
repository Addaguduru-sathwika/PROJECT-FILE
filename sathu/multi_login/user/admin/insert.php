<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "multi_login";
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
$f=$_POST['t6'];
//insert code
$sql = "INSERT INTO events VALUES
    ('$a', '$b', '$c','$d','$e','$f')";
if ($conn->query($sql) === TRUE) 
{
 echo "record inserted successfully";
} 
else 
{
 echo "Error: " . $sql . "<br>" . $conn->error;
}
}
catch(PDOException $e)
 {
 echo $sql . "<br>" . $e->getMessage();
 }
$conn = null;
?>