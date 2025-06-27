<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
		<link rel="stylesheet" href="reg.css">
		<style type="text/css">
			.header {
	width: 100%;
	color: black;
	background:goldenrod;
	text-align: center;
	margin-right: 60px;
	border: 1px solid #whitesmoke;
	border-bottom: none;
padding: 20px;}
}

		</style>
</head>
<body background="indexbg1.jpg">
	
	
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			
				
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
			
	
		<?php endif ?>
		<!-- logged in user information -->

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;" onclick="myfunction()">logout</a>
					</small>

				<?php endif ?>
			</div>
					<script>
								function myfunction(){
					
									window.alert("you will be loggedout");
								}
								
							</script>	

<hr><table align="center" bgcolor="whitesmoke" cellpadding="5" cellspacing="5" width="1000"  ><tr><td>
<div  class="header">
<h1>REGISTRATION</h1>
</div>
<form name="sports_registraion_form" action="indexdb.php" method="POST" onsubmit="return validateform()" reuired>
<table  cellpadding="6" cellspacing="5" align="center" bgcolor="whitesmoke" width="900">

<tr><td><div class="input-group">
<label>Name:</label>
<input type="text" name="name" required/>
</div></td>

<td><div class="input-group">
<label>Roll No.</label>
<input type="text" name="rollno" required/>
</div></td>
	
<tr><td colspan="2"><div class="input-group">
<label>E-mail</label>
<input  type="email" name="mail" value="" required>
</div></td></tr>

<tr><td><div class="input-group1">
<label>streams:</label><br>
<input  type="radio" name="stream" value="BA" class="checkbox" required>Arts
<input  type="radio" name="stream" value="BCOM" class="checkbox">Commerce
<input  type="radio" name="stream" value="BSc" class="checkbox">Science
<input  type="radio" name="stream" value="managment" class="checkbox">Managment
</div></td>

<td><div class="input-group1">
<label>course:</label>
<select  name="course" required>
<option value=""></option>
	<option value="EPSM">EPSM</option>
	<option value="EPP">EPP</option>
	<option value="HLP">HLP</option>
	<option value="HPP">HPP</option>
	<option value="PLP">PLP</option>
	<option value="PPP">PPP</option>
	<option value="MLS">MLS</option>
	<option value="MLP">MLP</option>
	<option value="A&F">A&F</option>
	<option value="H">H</option>
	<option value="IPP">IPP</option>
	<option value="IB">IB</option>
	<option value="CAP">CAP</option>
	<option value="BMS">BMS</option>
	<option value="BVOC RM&IT">BVOC RM & IT</option>
	<option value="MSCS">MSCs</option>
	<option value="MPC">MPC</option>
	<option value="MECS">MECS</option>
	<option value="BTZC">BTZC</option>
	<option value="BTBCC">BTBCC</option>
	<option value="BCCAC">BCCAC</option>
	<option value="BCMBC">BCMBC</option>
	<option value="BZC">BZC</option>
	<option value="SE(H)">SE(H)</option>
	</select></div></td></tr>

<tr><td><div class="input-group1">
<label>year:</label><br>
<input  class="checkbox" type="radio" name="year" value="1st"/ required>1st
<input class="checkbox" type="radio" name="year" value="2nd"/>2nd
<input class="checkbox" type="radio" name="year" value="3rd"/>3rd
</div></td>

<td><div class="input-group1">
<label>Registration of:</label><br>
<input class="checkbox" type="radio" name="registrationof" value="certificate course" required>certificate course
 <input class="checkbox" type="radio" name="registrationof" value="representing college">representing college
</div></td></tr>

<tr><td><div class="input-group1">
<label>Indoor sport:</label><br>
<input class="checkbox" type="radio" name="indoor" value="badminton" required>Badminton
<input class="checkbox" type="radio" name="indoor" value="basketball">Basket Ball
<input class="checkbox" type="radio" name="indoor" value="chess">Chess
<input class="checkbox" type="radio" name="indoor" value="caromboard">Carrom Board
<input class="checkbox" type="radio" name="indoor" value="none">none
</div></td>

<td><div class="input-group1">
<label>Outdoor sport:</label><br>
<input class="checkbox" type="radio" name="outdoor" value="throwball" required>Throwball
<input class="checkbox" type="radio" name="outdoor" value="volleyball">Volley Ball
<input class="checkbox" type="radio" name="outdoor" value="handball">Chess
<input class="checkbox" type="radio" name="outdoor" value="cricket">Cricket
<input class="checkbox" type="radio" name="outdoor" value="none">none
</div></td></tr>

<tr>
<td><div class="input-group1">
<label>Past Record:</label><br>
<input  type="radio" name="pastrecord" value="national" required>National Player
<input  type="radio" name="pastrecord" value="international">International Player
<input  type="radio" name="pastrecord" value="none">none
</div></td></tr>

<tr><td><div class="input-group1">
<label>National or International player of which sport:</label>
<select  name="game" required>
   <option value=""></option>
	<option value="Badminton">Badminton</option>
	<option value="Basket Ball">Basket Ball</option>
	<option value="Boxing">Boxing</option>
	<option value="Hand Ball">Hand Ball</option>
	<option value="Volley Ball">Volley Ball</option>
	<option value="Tennis">Tennis</option>
	<option value="Throw Ball">Throw Ball</option>
	<option value="Hockey">Hockey</option>
	<option value="Soccer">Soccer</option>
	<option value="other">other</option>
	<option value="none">none</option>
</select></div></td>

<td><img src="ind1.jpg" width="200" height="180" align="right"></td>
</tr>
	<tr><td colspan="2">
	<input style="font-size:18px; width: 100%; height:40%; background-color: navajowhite;" type="reset" value="reset"></div></td></tr>
     <tr><td colspan="2">
     <input style="font-size:18px; width:100%; height: 40%; background-color:goldenrod;" type="submit" name="submit" value="register"></form></div></td></tr></table>
	</td></tr></table><hr>	

	
</body>
</html>