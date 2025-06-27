<html>
<head>
<title>pu1</title>
<style>
		body {
			background-image: linear-gradient(#993333,#d98c8c);
		}
		
		form {
  width: 400px;
  margin: 0 auto;
  overflow: hidden;
  border: 1px solid #ccc;
  box-shadow: 2px 2px 5px #ccc;
  padding: 20px;
  background-color: #fff;
  color: #333;
  font-family: Arial, sans-serif;
}
	</style>
</head>
<body>
<?php

@include 'db_conn.php';

session_start();

if(!isset($_SESSION['username'])){
   header('location:home1.php');
}


?>

<h5>Welcome <span><?php echo $_SESSION['username'] ?></span></h5>
<pre><?php
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
$rollno=$_SESSION['username'];
 $Event_Id = $_GET['Event_Id'];
 


   $Record = mysqli_query($conn,"SELECT * FROM `prakriti` WHERE Event_Id=$Event_Id");
$data = mysqli_fetch_assoc($Record);


if(isset($_POST['submit'])){

   $Event_name = $data['Event_name'];
$name=$data1['name'];
 $rollno=$data1['username'];

$phoneno=$data1['phoneno'];
$course=$data1['Course'];
$semester=$data1['Semester'];
   
 // Check if user has already registered for the event
    $check_query = "SELECT * FROM userevents WHERE Event_Id='$Event_Id' AND username='$rollno'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // User has already registered for the event
        echo '<script type="text/javascript">window.alert("You have already registered for this event!")</script>';
		 echo '<script>location.replace("userdashboard.php")</script>';
    } else {
	


if(mysqli_num_rows($Record )>0){
	$insert=" INSERT INTO userevents(Club,Event_Id,Event_name,Student_name,username,phoneno,Course,Semester) 
	      VALUES('Prakriti','$Event_Id','$Event_name','$name',$rollno,'$phoneno','$course','$semester')";
	  mysqli_query($conn,$insert);
	  
	   $whatsapp_query = "SELECT Whatsapp_Link FROM prakriti WHERE Event_Id = '$Event_Id'";
    $whatsapp_result = mysqli_query($conn, $whatsapp_query);
    $whatsapp_row = mysqli_fetch_assoc($whatsapp_result);
    $whatsapplink = $whatsapp_row['Whatsapp_Link'];
	
      echo '<script type="text/javascript">
          var r = confirm("Registered Successfully!! Click OK to join the WhatsApp group.");
          if (r == true) {
            window.open("' . $data['Whatsapp_Link'] . '");
          } else {
            location.replace("userdashboard.php");
          }
        </script>';
	  
} else {
	echo "User not found";
	}}
}

}

catch(PDOException $e)
{
	echo $sql."<br>".$e->getMessage();
}
$conn=null;
?>


<div class="container">
		
		<form action="" name='u1' method="POST">
		<h1><center> Registration Form</center></h1>

			<label for="event-id">Event Id:</label>
			<input type="int" class="input" id="event-id" name="event-id" value=" <?php echo $data['Event_Id']?>"  READONLY>

			<label for="event-name">Event Name:</label>
			<input type="text" class="input" id="event-name" name="event-name" value=" <?php echo $data['Event_name']?>"  READONLY >

			<label for="name">Enter Your Name:</label>
			<input type="text" class="input" id="name" name="name" value=" <?php echo $data1['name']?>"  READONLY>

			<label for="roll-number">Enter Roll Number:</label>
			<input type="text" class="input" id="roll-number" name="roll-number" value=" <?php echo $data1['username']?>"  READONLY>

			<label for="phone-number">Enter Phone Number:</label>
			<input type="text" class="input" id="phone-number" name="phone-number" value=" <?php echo $data1['phoneno']?>"  READONLY>

			<label for="course">Enter Your Course:</label>
			<input type="text" id="course" name="course" value=" <?php echo $data1['Course']?>"  READONLY>

			<label for="semester">Enter Your Semester:</label>
			<input type="text" id="semester" name="semester" value=" <?php echo $data1['Semester']?>"  READONLY>

			<button type="submit" name="submit">Enter</button>
		</form>
	</div>


</body>
</html>