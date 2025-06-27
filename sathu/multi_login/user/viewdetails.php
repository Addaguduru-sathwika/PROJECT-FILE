
<html>
<head>
<title>Event details</title>
<style>
body{
	 background: url(background.png);
    background-size: cover;
     height: 100vh;
    background-position: center;
}
h1{
	font-size:30px;color:blue;
	font-weight:bold;
	font-family:Lucida Handwriting;
}

.container{
	width:50px;
	height:20px;
	margin-left:20px;
	float:right;
	margin-top:-350px;

}
img{
	height:500px;
	width:500px;
}
p{
font-size:20px;
color:blue;
font-weight:bold;
font-family:Lucida Handwriting;
}
  button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}


button:hover {
  background-color: #008CBA;
  color: white;
}

</style>

</head>
<body>
<h1><center> Event Details</center></h1>
<p>
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

echo '<br>Description:';

if(isset($_GET['Event_id']))
{
$Event_id = $_GET['Event_id'];
$sql ="SELECT * FROM `prakriti1` WHERE Event_id=$Event_id";

$query=mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($query)){
	echo "<br><br>Event ID: ";
echo	$Event_id = $row['Event_id'];
	echo "<br><br>Event Name: ";
echo	$Event_name = $row['Event_name'];

echo "<br><br> Registration Start Date : ";
echo	$Registration_start_date = $row['Registration_start_date'];
echo "<br><br> Registration End  Date : ";
echo	$Registration_end_date = $row['Registration_end_date'];
  
 echo "<br><br> Rules : ";
echo	$rules = $row['rules'];?>
   
</p>

<div class="container">
       <img align="right" src="data:image/jpg;base64,' . base64_encode($row['image']) . '" /> </style>
		   </div>
<?php

echo"<br>

<button><a  href='registration.html'>Register</a></button>";
echo"<br>
<button><a  href='events.php'>Back</a></button>";

}//while
}//if

}//try
catch(Exception $e)
{
echo $e->getMessage();
}
?>

</body>
</html>