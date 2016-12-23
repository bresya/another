
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>anotherone</title>
		<link rel="stylesheet" href="css/style2.css">
		<style>
		@import url('https://fonts.googleapis.com/css?family=Lato|Roboto+Condensed|Slabo+27px|Yanone+Kaffeesatz');
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
			<div class="main">
				<div class="slider">
					<div class="clk fl sl sl-l semiopaque"><img src="images/left-arrow.png" alt=""></div>
					<div class="clk fr sl sl-r semiopaque"><img src="images/right-arrow.png" alt=""></div>
					<div class="bullets ct">
						<div class="bullet round clk semiopaque ct" id="bull-1"></div>
						<div class="bullet round clk semiopaque ct" id="bull-2"></div>
						<div class="bullet round clk semiopaque ct" id="bull-3"></div>
						<div class="bullet round clk semiopaque ct" id="bull-4"></div>
					</div>
					<div class="imgs">
						<img class="sl-img hidden current" src="http://img.desktopwallpapers.ru/nature/pics/wide/1920x1200/872bb991ad26412a5288430994797712.jpg" alt="">
						<img class="sl-img hidden" src="http://cdn.demo.fabthemes.com/kansas/files/2012/08/wallpaper-722590cp.jpg" alt="">
						<img class="sl-img hidden" src="http://www.hdnicewallpapers.com/Walls/Big/Mountain/Awesome_Landscape_Mountain_Wallpaper.jpg" alt="">
						<img class="sl-img hidden" src="https://media.thequestion.ru/image/1366x768/ec0c92705995230d8b819e169edc560eeadc7e9d?url=https%3A%2F%2Fthequestion.s3.eu-central-1.amazonaws.com%2F985%2F229029-0daada72.jpeg" alt="">
					</div>
				</div>
				<div class="content"></div>
				<div class="aside"></div>
			</div>
			<div class="news">
				<div class="article-container">
					<h1>Hello, I am Article!</h1>
					<div class="article hidden current"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam sed tempora mollitia facilis, quibusdam, provident? Sit aliquid ipsam quasi, aperiam necessitatibus quia, mollitia! Laudantium odio nam reprehenderit qui similique, expedita!</p>
					<p>Pariatur amet enim cupiditate odit reprehenderit quo provident id quas dignissimos perspiciatis, officia, inventore ut exercitationem molestiae maiores hic? Quam est maiores ipsam nisi animi consequatur libero saepe neque, obcaecati?</p>
					<p>Tempora modi porro quas nulla quod ipsa labore autem asperiores mollitia amet. Modi corrupti magnam libero. Explicabo dolorum quae repudiandae nam ipsum nulla corporis eligendi libero quidem, veniam quam quod?</p>
					<p>Possimus eligendi, similique reprehenderit ea expedita, distinctio modi harum, optio accusantium iste consequatur voluptas ipsum! Molestiae nam sed delectus impedit minus, hic, nemo vitae dignissimos, eos eius reiciendis eveniet suscipit.</p>
					<p>Qui corporis, debitis expedita est cumque numquam animi dolorum. Doloribus architecto, quos molestias aliquid voluptatibus tempore, enim similique cupiditate inventore fugit nobis quo reiciendis aperiam, temporibus repellendus neque, ipsum dolorum.</p>
					</div>
				</div>
			</div>
			<div class="contacts">
			<div class="heading"><h1>Find me here!</h1></div>
			<div id="map"></div>
   

			</div>
		<div class="footer">
			<div class="img-link fl clk"><a href="https://vk.com/bresya"><img src="images/vklogo.png" alt=""></a></div>
			<div class="img-link fl"><img src="" alt=""></div>
			<div class="img-link fl"><img src="" alt=""></div>
			<p class="fr"><small>All rights reserved.</small></p>
		</div>
	</div>
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	 <script>
      function initMap() {
        var karazina = {lat: 50.007238, lng: 36.230430};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: karazina
        });
        var marker = new google.maps.Marker({
          position: karazina,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcJZFn8MEr_yMFgPwYFkwr6K0gYhRXPzM&callback=initMap">
    </script>
</body>
</html>