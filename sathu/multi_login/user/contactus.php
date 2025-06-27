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

//insert code
$sql = "INSERT INTO contact_us VALUES
    ('$a', '$b', '$c','$d')";
if ($conn->query($sql) === TRUE) 
{
 echo '<script>alert("THANK YOU")</script>';
 echo '<script>location.replace("homemain.php")</script>';
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