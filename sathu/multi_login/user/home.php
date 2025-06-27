
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<header>
        

            <div class="logo"> <img src="images.png" /></div>

            <ul>
			    <li><a href="homemain.php">HOME</a></li>

                
                <li><a href="events.php">EVENTS</a></li>
                <li><a href="retrivingrl.php">REGISTERED LIST</a></li>
                
                <li><a href="login1.php"> LOGOUT</a></li>

            </ul>

</header>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
     <h1><center>Hello, <?php echo $_SESSION['user_name']; ?></center></h1>
     
</body>
</html>

<?php 
}else{
     header("Location: index1.php");
     exit();
}
 ?>