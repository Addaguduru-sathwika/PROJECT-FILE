<html>
<head>
	<style>
.pading{width:102.5%;
	margin-left:-30px;
color:blue;
background-color:paleturquoise;
}
img{margin-bottom:-60px;
margin-top:-30px;
margin-right: -30px;
margin-left: -10px; }
	
		table{width:1510px;
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


	
 <img src="admin/admin3.jpg" width="1520" height="550" align="center"><br><br><br><br>

 <h1 class="pading" align="center"> STATE MEDALIST</h3>
<?php
$servername="127.0.0.1:3308";  
$username="root";
$password="";
$dbname="multi_login";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

$query="select * from achieves where player='state'";
$data=$conn->query($query);
echo"<table border='1'>
<tr>
<th>Name</th>
<th>Roll No.</th>
<th>Stream</th>
<th>Course</th>
<th>Sport</th>
<th>Year</th>
<th>Medal</th>

<tr>";
foreach($data as $row)
{
	echo"<tr>";
echo"<td>" .$row['name']. "</td>";
echo"<td>" .$row['num']. "</td>";
echo"<td>" .$row['stream']. "</td>";
echo"<td>" .$row['course']. "</td>";
echo"<td>" .$row['sport']. "</td>";
echo"<td>" .$row['year']. "</td>";
echo"<td>" .$row['medal']. "</td>";
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