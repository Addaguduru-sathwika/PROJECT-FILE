<html>
<head>
<title>Event details</title>
 <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<?php require 'head.php'; ?>
<br><br><br><br><br><br><br>
<body style ="background-image:url('login2.jpg');background-repeat:no-repeat;background-size:cover;">
<form method="post">
<input type="number" name="t1" placeholder="Enter The Event Id"/>
<input type="submit" name="submit" value="Search"/>
</form>
<h1><center><font color="white"> Student Registration And Their Details</center></font></h1>

<?php
$servername="localhost:3306";
$username="root";
$password="";
$dbname="phpproject01";
try
{
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("unsuccessfull".$conn->connect_error);
}


if(isset($_POST['submit'])){
	$a=$_POST['t1'];
$sql1 ='SELECT * FROM data_insert WHERE  eid=10';
$data1=$conn->query($sql1);
echo "<table border='1' align='center'>
<tr>
<th>Name</th>
<th>Registration Id</th>
<th>College Name</th>
<th>Event Id</th>
<th>Gender</th>

</tr>";
foreach($data1 as $row)
{
	echo"<tr>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['rid']."</td>";
	echo"<td>".$row['college name']."</td>";
	echo"<td>".$row['eid']."</td>";
	echo"<td>".$row['gender']."</td>";
	
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
