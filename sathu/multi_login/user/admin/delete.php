<?php
$servername="127.0.0.1:3306";  
$username="root";
$password="";
$dbname="multi_login";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$use=$_POST['t1'];
$sql="delete from events where eventid='$use'";
$conn->exec($sql);
echo "Student deleted successfully!!";
}
catch(PDOException $e){
echo $sql. "<br>" .$e->getMessage();
}
$conn=null;
?>