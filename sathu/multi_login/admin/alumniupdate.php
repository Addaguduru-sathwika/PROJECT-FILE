<!DOCTYPE html>
<html>
	<style>

		.space{margin-top:1.5%;}
.pading{width:100%;
color:black;
margin-left: -20px;
background-color:silver;
padding:20px;
}
img{margin-bottom:-57px;
margin-top:-30px;
margin-right: -60px;
margin-left: -10px; }
	
		table{width:1540px;
			margin-top: -17px;
			margin-bottom:-20px;
			margin-left:-10px;
			
		}
		  border-collapse: collapse;
		{

  width: 100%;
  
}

th, td {
  text-align: center;
  padding: 5px;
}

tr{
	background-color: #f2f2f2;
	}

th {
  background-color:gray ;
  color: snow;}
</style>
</head>
<body bgcolor="mistyrose">
 <img src="admin6.jpg" width="1550" height="300" align="center"><br><br><br>

 <h1 class="pading" align="center">ALUMNAE UPDATE</h1>

<form  action="alumniinsert.php" method="POST">
<table   border="2" >
<tr><th align="center">Name</th>
	<th align="center">RollNo.</th>
	<th align="center">Stream</th>
	<th align="center">Course</th>
	<th align="center">Player</th>
	<th align="center">Sport</th>
	<th align="center">Year Of Passing</th>
	<th align="center">Medal</th>
	<th align="center">Present Occupation</th></tr>
<tr>
<td height="20"><input type="text" name="stuname" required/></td>
<td><input type="text" name="rno" required/></td>
<td><input  type="radio" name="streams" value="BA" class="checkbox" required>Arts
<input  type="radio" name="streams" value="BCOM" class="checkbox">Commerce
<input  type="radio" name="streams" value="BSc" class="checkbox">Science
<input  type="radio" name="streams" value="managment" class="checkbox">Managment</td>
<td><select  name="crse" required>
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
	</select></td>
<td><input  type="radio" name="st" value="state">State
<input  type="radio" name="st" value="national" >National
<input  type="radio" name="st" value="international" >International</td>
<td><input   type="text" name="sports" required></td>
<td><input   type="text" name="years" required></td>
<td><input  type="radio" name="medals" value="gold" required>gold
 <input  type="radio" name="medals" value="silver">silver
  <input  type="radio" name="medals" value="bronze">bronze</td>
<td><input   type="text" name="occupation" required></td></tr>

<tr><td colspan="9">
	<input style="font-size:18px; width: 100%; height:40%; background-color:silver;" type="reset" value="reset"></td></tr>
     <tr><td colspan="9">
     <input style="font-size:18px; width:100%; height: 40%; background-color:dimgray;" type="submit" name="submit" value="update"></form></td></tr></table>
	
	<img class="space" src="admin7.jpg" width="1550" height="195" align="center">	
</body>
</html>
