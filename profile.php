<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>anotherone</title>
		<link rel="stylesheet" href="css/style2.css">
		<style>
		@import url('https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Source+Sans+Pro');
		#map{
			width: 100%;
			height: 400px;
		}
		</style>
		
	</head>
	<body>
		<div class="container">
			
			<?php include_once 'modal.php'; ?>
			<div class="header">
				<?php include_once 'header.php'; ?>
			</div>
			<?php
			require_once('db_connect.php');
			$db = new DB_CONNECT();
			$email = $_SESSION['e-mail'];
			$result = mysql_query("SELECT * FROM `users` WHERE `e-mail`='$email'") or die(mysql_error());
			$myrow = mysql_fetch_array($result);
			#$myrow['e-mail']." ".$myrow['password']." ".$myrow['name'];
			?>
			<div class="profback">
				<div class = "image">
					<img src="images/7aRum-Z1bik.jpg" alt="">
				</div>
				<div class="main fr prof">
				<h1 style="color:#FAFAFA; text-align:center">Change your profile</h1>
				<form action="changeprof.php" method="post">
				<div class="profinputs">
					<input type="hidden" name="email" value="<?php echo $_SESSION['e-mail'];?>">
					<input type="text" name="name" id="" placeholder="<?php echo $myrow['name'];?>">
					<input type="text" name="surname" id="" placeholder="<?php echo $myrow['surname'];?>">
					<input type="password" name="pass" id="" placeholder="<?php echo $myrow['password'];?>">
					<input class="btn" type="submit" value="OK">
				</div>
				
				</form>
			</div>
			</div>
			
		<!--     <div class="footer">
		    <div class="img-link fl clk"><a href="https://vk.com/bresya"><img src="images/vklogo.png" alt=""></a></div>
		    <div class="img-link fl"><img src="" alt=""></div>
		    <div class="img-link fl"><img src="" alt=""></div>
		    <p class="fr"><small>All rights reserved.</small></p>
		</div> -->
		</div>
		<script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>