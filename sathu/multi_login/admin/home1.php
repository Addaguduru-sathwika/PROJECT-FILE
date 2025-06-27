
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
  .sub-header{
  height:50vh;
  width:100%;
  background-image:url(frontimage.jpg);
  background-position:center;
  background-size:cover;
  text-align:center;
  color:#000;
   }
   .sub-header h1{
  margin-top:100px;
}
  .header {
   text-align: center;
  }
    h3{
    text-align: center;
    }
    a{
  color: #fff;
  text-decoration: none;
  }
.center {
	text_align:center;
  margin-left: auto;
  margin-right: auto;
}
.box{
  background-color: lightgrey;
  width: 260px;
  background:#f4A4A4;
  border-radius:10px;
  margin-bottom:5%;
  padding:30px 20px;
}
</style>
</head>
<body background image=bg2.jpg>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>

	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
			
		<?php endif ?>
                <div class="center">
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home1.php?logout='1'" style="color: red;">logout</a>
                       
					</small>

				<?php endif ?>
			</div>
		</div>
		<table width="720" class="center"><tr>
    <td>
<h3 class="box"><a href="events.php">Events</a></h3></td><td>
<h3 class="box"><a href="retriverl.php">Registered Students</a></h3></td>
</tr></table>
</body>
</html>