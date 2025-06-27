<html>
<head>
<title>Event details</title>
</head>
<body>
<form method="post">
<input type="number" name="t1" placeholder="Enter The Event Id"/>
<input type="submit" name="submit" value="Search"/>
</form>
<h1><center> Student Registration And Their Details</center></h1>
<a href="retriverl.php" target="">abc</a>
</body>
</html>
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
	$eid=$_POST['t1'];
$sql1 ='SELECT * FROM `data_insert` WHERE  eid=$eid';
$data1=$conn->query($sql1);
echo "<table border='1' align='center'>
<tr>
<th>Event Id</th>

</tr>";
foreach($data1 as $row)
{
	echo"<tr>";
	echo"<td>".$row['eid']."</td>";
	
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
