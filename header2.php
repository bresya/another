<div class="link logo fl"><a href="index.php"><img class="medialink" src='images/logo.png' alt=''></a></div>
<!-- <div class="link fl" id="home"><a href="#"><p class="plink">home</p><img src="" alt="" class="medialink"></a></div> -->
<div class="link" id="news"><a href="news.php"><img src="images/news.png" class="medialink"><p class="plink">news</p></a></div>
<div class="link" id="contacts"><a href="#"><img src="images/contact.png" class="medialink"><p class="plink">contacts</p></a>	</div>
<?php 
	session_start();
	if (isset($_SESSION['e-mail'])) {
		echo "<div class='dropdown upper fr'>
	<div class = 'user'><img src='images/user.png' class='medialink'><p class='nick'>".$_SESSION['e-mail']."</p></div>
	<div class='hidden upper logout link clk' id='logout'><img src='images/logout.png' class='medialink'><p class='nick'>.log-out</p></div>
	</div>";
	}
	else{
		echo "<div class='hidden'></div><div class='log-in clk'><img src='images/login.png' alt=''></div>";
	}

?>

