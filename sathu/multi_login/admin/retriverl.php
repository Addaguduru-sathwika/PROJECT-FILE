<?php
error_reporting(0);
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project sem6";
try {
 $conn = new mysqli($servername,$username, $password,
$dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo "<br>";
$sql = "SELECT * from data_insert";
$result = $conn->query($sql);
if ($result->num_rows> 0) {
 // output data of each row
/* while($row = $result->fetch_assoc()) {
 echo "NAME: " . $row["name"]. " <br>email: " . $row["email"]. "
<br>number " . $row["number"]. "<br>"password:".$row["password"]. "<br>";
 }*/
// or below code
 echo "<h2>Registered list</h2>";
 echo "<table
border=1><tr><th>name</th><th>registratio id</th><th>college name</th><th>eid</th><th>gender</th></tr>";
 // output data of each row
while($row = $result->fetch_assoc()) {
 echo
"<tr><td>".$row["name"]."</td><td>".$row["registration id"]."</td><td>
".$row["college name"]."</td>"."<td>".$row["eid"]."</td>"."<td>".$row["gender"]."</td></tr>";
 }
 echo "</table>";
} else {
 echo "0 results";
}
}
catch(PDOException $e)
 {
 echo $sql . "<br>" . $e->getMessage();
 }
$conn = null;
?>
