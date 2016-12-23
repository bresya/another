<div class="back"></div>
<div class="modal ct addnewsmodal">
	<p class="login-text"><span class="log clk">Add news</span> <span class="fr close clk">x</span></p>
	<form action="" method="" class="hidden current">
		<div class="profinputs">
			<input type="hidden" name="category" id="addcategory" value="<?php echo 
			$_GET["category"];?>">
			<input type="text" name="title" id="addtitle" placeholder="Title of the article*" required>
			<textarea name="text" id="addtext" cols="20" rows="7" placeholder="Text of the article*" required></textarea>
			<input type="text" name="imglink" id="addimglink" placeholder="Link to the image">
			<input type="text" name="vidlink" id="addvidlink" placeholder="Link to the video">
			<input type="submit" class="btn addnewssubmit" value="add">
		</div>
	</form>
</div>