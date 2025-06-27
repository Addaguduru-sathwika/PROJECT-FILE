<?php

$servername="localhost:3306";
$username="root";
$password="";
$dbname="project sem6";
try
{
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$name=$_POST['t1'];
$startdate=$_POST['t2'];
$enddate=$_POST['t3'];
$rules=$_POST['t4'];
$conumber=$_POST['t5'];
$coname=$_POST['t6'];


if(empty($name))
{
	echo'<script type="text/javascript">window.alert("Name is required....")</script>';
	 echo '<script>location.replace("addevent1.php")</script>';
}
if(empty($startdate))
{
	echo'<script type="text/javascript">window.alert("start date is required....")</script>';
}

if(empty($enddate))
{
	echo'<script type="text/javascript">window.alert("End date is required....")</script>';
}
if(empty($rules))
{
	echo'<script type="text/javascript">window.alert("Rules are required....")</script>';
	 echo '<script>location.replace("addevent1.php")</script>';
}
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

$sql="INSERT INTO prakriti(Event_name,Registration_start_date,Registration_end_date,Rules,co_name,Mobile_number,image) 
      VALUES('$name','$startdate','$enddate','$rules','$coname','$conumber','$file')";
	  
$i=$conn->exec($sql);
	  if($i>0)
	  {
		 echo '<script type="text/javascript">window.alert("Event Added Successfully!!")</script>';
		 echo '<script>location.replace("addevent1.php")</script>';
	  }
	  else
	  {
		  echo"Duplicate or invalid data";
	  }
	  
}
catch(PDOException $e)
{
	echo $sql."<br>".$e->getMessage();
}
$conn=null;
?>