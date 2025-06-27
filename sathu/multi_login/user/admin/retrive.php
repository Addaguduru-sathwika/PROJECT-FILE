<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "multi_login";
try {
 $conn = new mysqli($servername,$username, $password,
$dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo "<br>";
$sql = "SELECT * from events";
$result = $conn->query($sql);
if ($result->num_rows> 0) {
 // output data of each row
/* while($row = $result->fetch_assoc()) {
 echo "NAME: " . $row["name"]. " <br>email: " . $row["email"]. "
<br>number " . $row["number"]. "<br>"password:".$row["password"]. "<br>";
 }*/
// or below code
 echo "<h2><center>REGISTERED STUDENTS LIST</center></h2>";
 echo "<table
border=1><tr><th>Event ID</th><th>Event Name</th><th>Event Description</th><th>Event Date</th><th>Event Time</th><th>Venue</th></tr>";
 // output data of each row
while($row = $result->fetch_assoc()) {
 echo
"<tr><td>".$row["eventid"]."</td><td>".$row["eventname"]."</td><td>
".$row["eventdes"]."</td>"."<td>".$row["eventdate"]."</td>"."<td>".$row["eventtime"]."</td>"."<td>".$row["venue"]."</td></tr>";
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
                background-color: #5d6d7d;  
           }  
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 100%; 
                align:center;
margin-left:10px;
margin-right:10px;		
margin-top:20px;				
           }  
           table th{  
                background-color: red;  
                color: #fff;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: #fff;  
                font-size: 1em;  
                text-align: center;  
           }  
           table tr:nth-child(odd){  
                background-color: #797676;  
           }  
      </style>  
 </head>  
 <body>
		   </body>
		   </html>