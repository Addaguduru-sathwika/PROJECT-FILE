<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "project sem6";

$data =  mysqli_connect($servername,$username, $password, $dbname);
if($data===false)
{
	die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["uname"];
		$password=$_POST["psw"];

}
$sql="select * from login where username='$username' AND password='$password'";
$result=mysqli_query($data,$sql);
$row=mysqli_fetch_array($result);
if($row["usertype"]=="admin")
{
	header("location:user/admin/home1.php");
}
?>