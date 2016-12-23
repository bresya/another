<div class="back"></div>
<div class="modal ct logmodal">
	<p class="login-text"><span class="log clk">.log-in</span>|<span class="reg small clk">.register</span> <span class="fr close clk">x</span></p>
	<form action="login.php" method="post" class="hidden current" id="log">
		<div class="inputs">
			<input type="email" name="email" id="" placeholder="your e-mail" required>
			<input type="password" name="pass" id="" placeholder="your password" class="password" required>
			<img src="images/show-pass.png" alt="" class="toggle-pass openeye clk"><img src="images/hide-pass.png" alt="" class="toggle-pass closeeye clk">
			<input class="btn" type="submit" value=".log-in">
		</div>
	</form>
	<form action="register.php" method="post" class="hidden" id="reg">
		<div class="inputs">
			<input type="text" name="name" id="" placeholder="your name" required>
			<input type="text" name="surname" id="" placeholder="your surname" required>
			<input type="email" name="email" id="" placeholder="your e-mail" required>
			<input type="password" name="pass" id="" placeholder="your password" class="password" required>
			<img src="images/show-pass.png" alt="" class="toggle-pass openeye clk"><img src="images/hide-pass.png" alt="" class="toggle-pass closeeye clk">
			<input class="btn" type="submit" value=".register">
		</div>
	</form>
</div>