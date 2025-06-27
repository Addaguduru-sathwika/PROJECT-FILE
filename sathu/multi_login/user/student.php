<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Hostel Management System</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />

<style>
<nav>
    <div class="menu">
      <div class="logo">
        <a href="#">HOSTEL</a>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        
        <li><a href="adminact.php">ADMIN</a></li>
        <li><a href="studentact.php">STUDENT</a></li>
      
      </ul>
    </div>
  </nav>


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
::selection{
  color: #000;
  background: #fff;
}
nav{
  position: fixed;
  background: #1b1b1b;
  width: 100%;
  padding: 10px 0;
  z-index: 12;
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
}
.menu .logo a{
  text-decoration: none;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li:first-child{
  margin-left: 0px;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}
.img{
  background: url(images/b10.jpg)no-repeat;
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  position: relative;
}
.img::before{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
}
</style>
</head>
<body>
 



    <?php
       if (isset($_GET['Message'])) {
           
           
           echo $_GET['Message'];
           
           
       }
?>

<nav>
    <div class="menu">
      <div class="logo">
        <a href="#">HOSTEL</a>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        
        <li><a href="adminact.php">ADMIN</a></li>
        <li><a href="studentact.php">STUDENT</a></li>
      
      </ul>
    </div>
  </nav>




 <!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
 <style>
 body{
padding: 0px;
margin: 0px;
font-family: Abel;
background-image: url(images/b10.jpg);
background-repeat: no-repeat;;
background-size: cover;
background-attachment: fixed;
}
.container{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
width: 28%;
margin: auto;
background-color: rgba(0, 0, 0, 0.5);
color: white;
padding: 30px;
box-shadow: 0px 2px 8px 2px #555;
border-radius: 6px;
box-sizing: border-box;
}
.container h2{
padding: 10px 15px;
letter-spacing: 1px;
}
.form-container{
padding: 16px;
}
.form-container label{
text-transform: uppercase;
font-size: 12px;
letter-spacing: 1px;
}
input[type=text], input[type=password], button{
width: 100%;
padding: 8px 12px;
margin: 8px 0px;
display: inline-block;
box-sizing: border-box;
color: white;
background-color: transparent;
border: 1px solid white;
}
input[type=text]:focus, input[type=password]:focus{
outline: none;
}
button{
padding: 12px 20px;
cursor: pointer;
font-family: Abel;
font-size: 14px;
letter-spacing: 1px;
}
button:hover{
background: rgba(0, 0, 0, 0.5);
}

 </style>
</head>

<body>
<br>
<br>
<br>

   

 


 <div class="container">
    <h2>STUDENT LOGIN </h2>
    <div class="form-container">
         <form  method="post" action="studentact.php">  
        <label><b>username</b></label>
        <input type="text" placeholder="Enter Username" required>
        <br>
        <label><b>password</b></label>
        <input type="password" placeholder="Enter Password" required>
        <br><br>
		
		
       
		<a href="sudenthome.php"><button type="button">LOGIN ..</button></a>
		
		<a href="studentreg.php"><button type="button">Sign Up..</button></a>
      </form>
    </div>
  </div>



    
   
  <!-- end #footer -->
</body>
</html>

