<html>
<head>
       <style>
.padding{
width: 100%;}
img{margin-bottom:-40px;
margin-top:-30px;
margin-right: -30px;
margin-left: -10px; }
       </style>
</head>
<body>
       <img src="admin5.jpg" width="1500" height="550" align="center">

<?php
$servername="127.0.0.1:3308";  
$username="root";
$password="";
$dbname="multi_login";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$n=$_POST['stuname'];
$rollno=$_POST['rno'];
$str=$_POST['streams'];
$course=$_POST['crse'];
$play=$_POST['st'];
$sprt=$_POST['sports'];
$yrs=$_POST['years'];
$mdls=$_POST['medals'];

$sql="insert into achieves(name,num,stream,course,player,sport,year,medal) values ('$n','$rollno','$str','$course','$play','$sprt','$yrs','$mdls')";
$conn->exec($sql);
echo "<body bgcolor=mistyrose><br><br><br><br><p><center><font color=green size=10px style=background-color:palegreen class=padding>list updated successfully!!</font></center></p>
       <p><a href='home.php' style='text-decoration:none; font-size:25px' align='center'>Back to Home Page</a></p></body><br>";
}
catch(PDOException $e){
echo $sql. "<br>" .$e->getMessage();
}
$conn=null;
?>