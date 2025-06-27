<!DOCTYPE html>
<html>
<head>
	<style>
.pading{width:104%;
	margin-left:-30px;
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
  background-color:hotpink ;
  color: snow;}
</style>
</head>
<body bgcolor="mistyrose">
 <img src="admin3.jpg" width="1540" height="550" align="center"><br><br><br><br>

 <h1 class="pading" align="center">LIST OF REGISTERED STUDENTS</h3>


<?php
$servername="127.0.0.1:3308";  
$username="root";
$password="";
$dbname="multi_login";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$query="select * from sports_registraion_form";
$data=$conn->query($query);
echo"<table>
<tr>
<th>Name</th>
<th>Roll no</th>
<th>mail</th>
<th>stream</th>
<th>year</th>
<th>registrationof</th>
<th>Indoor</th>
<th>Outdoor</th>
<th>pastrecord</th>
<th>game</th>
</tr>";
foreach($data as $row)
{
	echo"<tr>";
echo"<td>" .$row['name']. "</td>";
echo"<td>" .$row['rollno']. "</td>";
echo"<td>" .$row['mail']. "</td>";
echo"<td>" .$row['stream']. "</td>";
echo"<td>" .$row['year']. "</td>";
echo"<td>" .$row['registrationof']. "</td>";
echo"<td>" .$row['indoor']. "</td>";
echo"<td>" .$row['outdoor']. "</td>";
echo"<td>" .$row['pastrecord']. "</td>";
echo"<td>" .$row['game']. "</td>";
echo"</tr>";
}
echo"</table>";
}
catch(PDOException $e){
echo $sql. "<br>" .$e->getMessage();
}
$conn=null;
?>
</body>
</html>