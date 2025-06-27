<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
<style type="text/css">	{ margin: 0px; padding: 0px; }
.header {
	width:110%;
	margin: -40px auto 0px;
	color: white;
	background:orange;
	text-align: center;
	border:orange;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 30px;
}
form, .content {
	width: 112%;
	margin: 0px auto;
	padding: 20px;

	background:papayawhip;
	border-radius: 0px 0px 10px 10px;

}
.input-group {
	margin: 10px 0px 10px 0px;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
#user_type {
	height: 40px;
	width: 98%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background:orange;
	border: none;
	border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
.profile_info img {
	display: inline-block; 
	width: 50px; 
	height: 50px; 
	margin: 5px;
	float: left;
}
.profile_info div {
	display: inline-block; 
	margin: 5px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}
</style>
</head>
<body bgcolor="snow">
<table>
<tr><td><img src="indexbg1.jpg" align="left" height="750" width="750"></td>
	<td><h2 class="header">Sign Up</h2>

<form method="post" action="register.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div><br><br>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div><br><br>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div><br><br>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div><br><br>
	<div class="input-group">
		<center><button  type="submit" class="btn" name="register_btn" style="width:650px;">Sign Up</button></center>
	</div>
	<p>
		Already a member? <a href="login.php">Login</a>
	</p>
</form></td></tr>
</body>
</html>