<?php
$servername="127.0.0.1:3306";  
$username="root";
$password="";
$dbname="project sem6";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$use=$_POST['t1'];
$sql="delete from prakriti where Event_id='$use'";
$conn->exec($sql);
echo "event deleted successfully!!";
}
catch(PDOException $e){
echo $sql. "<br>" .$e->getMessage();
}
$conn=null;
?>