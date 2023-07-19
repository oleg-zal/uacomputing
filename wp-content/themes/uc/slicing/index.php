<?php include('header.php') ?>


<script>
$(document).ready(function(){
$('.mainPhoto').fadeIn(500);
	var winWidth = $(document).width();
	
	var xBg = -30;
	var yBg = -80;

	
	//Parallax
	$('body,html').mousemove(function(e) {
		
		var xPos = e.pageX,
			yPos = e.pageY;
			
		var pageWidth = $(document).width(),
			pageHeight = $(document).height();
		
		var xOffset = xPos-(pageWidth/2),
			yOffset = yPos-(pageHeight/2);		
		
		$('.mainPhoto').css('backgroundPosition',  (xBg - (xOffset/30)) + 'px ' + (yBg - (yOffset/30)) + 'px');
		
	});
	

});
</script>

<div class="middle" id="homePage">
<div class="mainPhoto" style="background-image:url('images/mainPhoto.jpg')">
	<div class="taglineWrapper">
		<div class="contentWrapper">
		<table>
		<tr>
		<td>
		<h1>—амые удивительные факты и личности
из истории развити€ IT в ”краине</h1>
		</td>
		<td><a href="articles-list.php" class="view"></a></td>
		</tr>
		</table>		
		</div>
	</div>
</div>
</div>
<?php include('footer.php') ?>