<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>anotherone</title>
		<link rel="stylesheet" href="css/style2.css">
		<style>
		@import url('https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Source+Sans+Pro|Ubuntu+Condensed');
		#map{
			width: 100%;
   			height: 400px;
		} 
		
	
		</style>
	</head>
	<body>
		<div class="container">
			
			<?php include_once 'editmodal.php'; ?>
			<?php include_once 'addmodal.php'; ?>
			<div class="header">
				<?php include_once 'header.php'; ?>
			</div>
			<div class="main center">
				<?php
				require_once('db_connect.php');
				if (isset($_SESSION['e-mail'])) {
				
				$db = new DB_CONNECT();
				$result = mysql_query("SELECT * FROM `users`") or die(mysql_error());
				echo '<table class="">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Surname</th>
							<th>Password</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
					while ($row = mysql_fetch_assoc($result)){
					echo '<tr id='.$row['id'].'>
							<td>'.$row['id'].'</td>
							<td>'.$row['name'].'</td>
							<td>'.$row['surname'].'</td>
							<td>'.$row['password'].'</td>
							<td><img src="images/ic_delete_forever_black_24dp_1x.png" class="delete" alt=""><img src="images/ic_border_color_black_24dp_1x.png" class="edit" alt=""></td>
						</tr>';
					}
					echo '</tbody>
						</table>';
					echo '<div class="ct" style="	width: 50px;"><img src="images/ic_add_circle_black_24dp_2x.png" class="addbtn" alt=""></div>';
					
				}
				else {
					echo "<h1 style='text-align:center'>Login first</h1>";
				}
				?>
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