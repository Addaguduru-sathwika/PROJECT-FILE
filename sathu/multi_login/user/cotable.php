<html>
<head>
<title> COORDINATORS </title>
   <link rel="stylesheet" type="text/css" href="user.css">
    <style>
	body {
    background: url(adde.jpg);
    background-size: cover;
     height: 100vh;
    background-position: center;
    
    
}
h2{
   font-family: "Times New Roman", Times, serif;
    color:blue;
	font-size:50px;
}

	table {
  border-collapse: collapse;
  float:center;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  font-size:20px;
  color:;
}

tr:hover {background-color: ;font-size:30px;}
    </style>

</head>
<?php require 'header.php'; ?>
<body>

<br><br><br><br><br><br>
<h2 ><center> COODINATOR</center></h2>
<table>
	    <tr>
		   <th>Event_id</th>
		   <th>Event Name</th>
		   <th>COORDINATOR NAME</th>
		   <th>COORDINATOR NUMBER</th>
		   
		</tr>

<?php
$servername="localhost:3306";
$username="root";
$password="";
$dbname="project sem6";
try
{
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

$sql="select * from prakriti";
$data=$conn->query($sql);
 
foreach($data as $row)
{
	echo"<tr>";
	echo"<br><td>".$row['Event_id']."</td>";
	echo"<td>".$row['Event_name']."</td>";
	echo"<td>".$row['co_name']."</td>";
	echo"<td>".$row['Mobile_number']."</td>";
	
	
	echo"</tr>";
}

}



catch(PDOException $e)
{
	echo $sql."<br>".$e->getMessage();
}
$conn=null;

?>
</table>
</header>
</body>
</html>