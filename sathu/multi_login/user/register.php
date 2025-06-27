<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" href="" />
<style>
body {
    background: url(images/adde.jpg);
    background-size: cover;
    height: 100vh;
    background-position: center;
}
h1{
    font-family: Lucida Handwriting;
    color:blue;
}
form{
	 
        padding: 6px 4px;
        font-size:20px;
        color:black;
}
button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
button {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

button:hover {
  background-color: #008CBA;
  color: white;
}

</style>
</head>
<center><form action="r.php" method="post">
<center><h1>REGISTRATION FORM</h1></center>
<label>EVENTID</label>
<input type="text" name="t1" placeholder="id"><br><br>
<label>EVENT NAME</label>
<input type="text" name="t2" placeholder="name"><br><br>
<label>EVENT TYPE</label>
<input type="text" name="t3" placeholder="name"><br><br>
<label> NAME</label>
<input type="text" name="t4" placeholder="name"><br><br>
<label> college name</label>
<input type="text" name="t5" placeholder="name"><br><br>
<label> GENDER</label>
<input type="radio" name="gender" value="male" id="male"> Male
	  <input type="radio" name="gender" value="female" id="female"> Female
	  <br><br>
<label>STEAM</label>
<input type="text" name="t6" placeholder="name"><br><br>
<label>MOBILE NUMBER</label>
<input type="text" name="t7" placeholder="name"><br>
<br>

<button type="submit">SUBMIT</button>

</form></center>
</html>