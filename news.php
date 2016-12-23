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
			
			<?php include_once 'modal.php';?>
			<div class="header">
				<?php include_once 'header.php'; ?>
			</div>
			<?php include_once 'addnewsmodal.php';?>
			<div class="news">
				
				<?php 
				if (!isset($_GET['category'])) {
					echo '<div class="newswrapper">';
					echo '<a href="news.php?category=Anime"><div class="tab">
					<div class="thumbnail"><img src="images/image1.jpg" alt="" class="thumb"></div>
					<h1 class="hero">Anime</h1>
					<p>Latest news about Japanese animation</p>
					</div></a>';
					echo '
					<a href="news.php?category=Memes"><div class="tab">
					<div class="thumbnail"><img src="images/memes.jpg" alt="" class="thumb"></div>
					<h1 class="hero">Memes</h1>
					<p>The dankest memes you ever seen</p>
					</div></a>';
					echo '
					<a href="news.php?category=osu"><div class="tab">
					<div class="thumbnail"><img src="images/osu.png" alt="" class="thumb"></div>
					<h1 class="hero">Osu!players</h1>
					<p>These are inhumans</p>
					</div></a>';
					echo '</div>';
				}
				if (isset($_GET['category'])) {
					$category = $_GET['category'];
					require_once('db_connect.php');
    				$db = new DB_CONNECT();

    			$result = mysql_query("SELECT * FROM `news` WHERE `category`='$category'") or die(mysql_error()); 
    			echo "<div class='article-container'>";
    			
    			echo "<a href='news.php'><img class='backbutton' src='images/backbutton.png'></a>";
    			if (isset($_SESSION['e-mail'])) {
    				# code...
    			
    			echo '<svg fill="#FAFAFA" class = "addnewsbtn clk" height="65" viewBox="0 0 24 24" width="65" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
</svg>';
}
    			echo  "<div class='articles'>";

    			while ($row = mysql_fetch_assoc($result)){
    				echo" <h1>".$row['title']."</h1>";
    				if (!empty($row['imglink'])) {
    					echo "<div class='wrapper'><img src='".$row['imglink']."' alt=''></div>";
    				}
    				else{	
    					echo '<iframe width="100%" height="315" src="'.$row['vidlink'].'" frameborder="0" allowfullscreen></iframe>';
    				}
    				
    				echo "<div class='article'>".$row['text']."</div>";
    			}
    			echo "</div>";
				}
				
				?>
			</div>
<!-- 
        <div class="footer">
            <div class="img-link fl clk"><a href="https://vk.com/bresya"><img src="images/vklogo.png" alt=""></a></div>
            <div class="img-link fl"><img src="" alt=""></div>
            <div class="img-link fl"><img src="" alt=""></div>
            <p class="fr small"><small>All rights reserved.</small></p>
        </div> -->
	</div>
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>