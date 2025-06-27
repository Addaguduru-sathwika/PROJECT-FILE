<!DOCTYPE html>
<html>
<head>
	<style>
.pading{width:102%;
	margin-left: -20px;

color:blue;
background-color:paleturquoise;
}
img{margin-bottom:-60px;
margin-top:-30px;
margin-right: -30px;
margin-left: -10px; }
	
		table{width:1500px;
			margin-bottom:-50px;
		}
		  border-collapse: collapse;
		{

  width: 100%;
  
}

th, td {
  text-align: center;
  padding: 5px;
}

tr{
	background-color: #f2f2f2;
	}

th {
  background-color:hotpink;
  color: snow;}
</style>
</head>
<body bgcolor="mistyrose">
 <img src="admin3.jpg" width="1520" height="550" align="center"><br><br><br><br>

 <h1 class="pading" align="center"> LOGIN DETAILS</h3>




<?php
$servername="127.0.0.1:3308";  
$username="root";
$password="";
$dbname="multi_login";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

$query="select * from users";
$data=$conn->query($query);
echo"<table>
<tr>
<th>User Name</th>
<th>Email</th>
<th>User Type</th>

<tr>";
foreach($data as $row)
{
	echo"<tr>";
echo"<td>" .$row['username']. "</td>";
echo"<td>" .$row['email']. "</td>";
echo"<td>" .$row['user_type']. "</td>";

}
echo"</table>";
}
catch(PDOException $e){
echo $sql. "<br>" .$e->getMessage();
}
$conn=null;
?>
