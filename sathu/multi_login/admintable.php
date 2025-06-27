<?php
$servername="127.0.0.1:3306";  
$username="root";
$password="";
$dbname="multi_login";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

$query="select * from student_details";
$data=$conn->query($query);
echo "<body bgcolor=yellow></body><br>"
echo"<table align=center>
<tr>
<th>Name</th>
<th>College name</th>
<th>Course</th>
<th>Year</th>
</tr>";
foreach($data as $row)
{
	echo"<tr>";
echo"<td>" .$row['name']. "</td>";
echo"<td>" .$row['college']. "</td>";
echo"<td>" .$row['course']. "</td>";
echo"<td>" .$row['year']. "</td>";

echo"</tr>";
}
echo"</table>";
}
catch(PDOException $e){
echo $sql. "<br>" .$e->getMessage();
}
$conn=null;
?>
