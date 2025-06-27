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
       <img src="admin/admin5.jpg" width="1530" height="560" align="center">
<?php
$servername="127.0.0.1:3308";  
$username="root";
$password="";
$dbname="multi_login";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$Name=$_POST['name'];
$Rollno=$_POST['rollno'];
$email=$_POST['mail'];
$Stream=$_POST['stream'];
$Course=$_POST['course'];
$Year=$_POST['year'];
$Registration=$_POST['registrationof'];
$Sports=$_POST['indoor'];
$Sport=$_POST['outdoor'];
$Pastrecord=$_POST['pastrecord'];
$Game=$_POST['game'];
$sql="insert into sports_registraion_form(name,rollno,mail,stream,course,year,registrationof,indoor,outdoor,pastrecord,game) values ('$Name','$Rollno','$email','$Stream','$Course','$Year','$Registration','$Sports','$Sport','$Pastrecord','$Game')";
$conn->exec($sql);
echo "<body bgcolor=mistyrose><br><br><br><br><p><center><font color=green size=10px style=background-color:palegreen class=padding> Registered successfully!!</font></center></p>
       </body><br>";
}
catch(PDOException $e){
echo $sql. "<br>" .$e->getMessage();
}
$conn=null;
?>
</body></html>