
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project sem6";
try {
 $conn = new mysqli($servername,$username, $password,
$dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo "<br>";
$sql = 'SELECT * from signupform';
$result = $conn->query($sql);
if ($result->num_rows> 0) {
 // output data of each row
/* while($row = $result->fetch_assoc()) {
 echo "NAME: " . $row["name"]. " <br>email: " . $row["email"]. "
<br>number " . $row["number"]. "<br>"password:".$row["password"]. "<br>";
 }*/
// or below code
 echo "<h2>Registered list</h2>";
 echo "<table
border=1><tr><th>username</th><th>password</th><th>confirm password</th><th>collegename</th><th>id proof</th></tr>";
 // output data of each row
while($row = $result->fetch_assoc()) {
 echo
"<tr><td>".$row["username"]."</td><td>".$row["password"]."</td><td>
".$row["confirm_password"]."</td>"."<td>".$row["college_name"]."</td>";

 
 }
 echo "</table>";
} else {
 echo "0 results";
}
}
catch(PDOException $e)
 {
 echo $sql . "<br>" . $e->getMessage();
 }
$conn = null;
?>
<!DOCTYPE html>  
 <html>  
 <head>
 <link rel="stylesheet" type="text/css" href="admin.css"> 
      <meta charset="utf-8">  
      <title>How to Select Data from Database in PHP & Display in Table Format</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-image: url('login2.jpg'); 
				background-size:cover;
           }  
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 70%; 
                align:center;
margin-left:180px;	
margin-top:60px;				
           }  
           table th{  
                background-color: black;  
                color: #fff;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: #fff;  
                font-size: 1em;  
                text-align: center; 
border:1px;				
           }  
           table tr{
			   background-color:#133d4a;
			   border:1px;
color: #fff;  			   
		   }
		   
</head>
<body style="background-image: url('login2.jpg'); background-repeat: no-repeat;background-size:cover;>
<a href="#" class="button1">Link Button</a>

</body>
</html>

