<?php
$servername="127.0.0.1:3306";  
$username="root";
$password="";
$dbname="multi_login";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

$query="select * from events";
$data=$conn->query($query);
echo "<body bgcolor=yellow></body><br>";
echo"<table>"
<tr>
<th>Event ID</th>
<th>Event Name</th>
<th>Event Description</th>
<th>Event Date</th>
<th>Event Time</th>
<th>Venue</th>
</tr>";
foreach($data as $row)
{
	echo"<tr>";
echo"<td>" .$row['eventid']. "</td>";
echo"<td>" .$row['eventname']. "</td>";
echo"<td>" .$row['eventdes']. "</td>";
echo"<td>" .$row['eventdate']. "</td>";
echo"<td>" .$row['eventtime']. "</td>";
echo"<td>" .$row['venue']. "</td>";

echo"</tr>";
}
echo"</table>";
}
catch(PDOException $e){
echo $sql. "<br>" .$e->getMessage();
}
$conn=null;
?>
