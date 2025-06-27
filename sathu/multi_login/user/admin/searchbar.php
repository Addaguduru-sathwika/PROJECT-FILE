<html>
<head>
<title>Event details</title>
<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<form method="post">
<input type="number" name="t1" placeholder="Enter The Event Id"/>
<input type="submit" name="submit" value="Search" />
</form>
<body>
<h1><center> Student Registration And Their Details</center></h1>
<?php
$servername="localhost:3306";
$username="root";
$password="";
$dbname="project sem6";
try
{
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("unsuccessfull".$conn->connect_error);
}


if(isset($_POST['submit'])){
	$a=$_POST['t1'];
$sql1 ="SELECT * FROM data_insert WHERE  eid=$a";
$data1=$conn->query($sql1);
echo "<table border='1' align='center'>
<tr>
<th>Event Id</th>
<th>Event Name</th>
<th>Roll Number</th>
<th>Phone Number</th>
<th>Course</th>
</tr>";
foreach($data1 as $row)
{
	echo"<tr>";
	echo"<td>".$row['college name']."</td>";
	echo"<td>".$row['eid']."</td>";
	echo"<td>".$row['gender']."</td>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['registration id']."</td>";
	echo"</tr>";
}
echo"</table>";

}

}
catch(PDOException $e)
{
	echo $sql."<br>".$e->getMessage();
}
$conn=null;
?>
</body>
</html>