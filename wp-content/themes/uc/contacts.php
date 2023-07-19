<?php /* Template Name: Contacts*/ ?>
<?php get_header(); ?>


<script>
$(document).ready(function(e) {
	
	$('a.sendEmail').click(function(e) {
		var valid=true;
			$('.contactForm .required').each(function(index) {
				if($(this).val()!==''){	
					$(this).removeClass('notvalid');
				} else {
					$(this).addClass('notvalid');
					valid=false;
				}				
			});
			
			if(valid){
			$('form.contactForm').submit();
			} else {
			showValidationError();			
			}
		
	});
	
	function showValidationError(){
		$('.alert.red').text('Вы не заполнили обязательные поля. Проверьте пожалуйста все поля ещё раз.');
		$('.alert.red').fadeIn(150);
	}
	
	
});
</script>
<div class="mainWrapper contact">
<div class="blockWrapper header">
	<div class="block" style="height:800px">
		<div class="topArea">
			<a href="http://klaxonstudio.com/portfolio/VitaminVentures/slicing" class="logo"><img src="<?php bloginfo(template_url) ?>/images/vitamin-logo.png"/></a>
			<div class="left lang"><a href="#" class="active">RU</a><a href="#">EN</a></div>
			<ul class="menu right">
				<?php wp_nav_menu( array( 'depth'  => 1 ) ); ?> 
			</ul>
			<div class="clear"></div>
		</div>
		
		<div class="left form" style="width:557px; padding-right:50px">
			<h1>Связаться с нами</h1>
			<div class="subscription">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

			</div>
			<form class="contactForm" action="<?php bloginfo('url') ?>/sendcontactform">
			<table width="550" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="127"><label>Имя <span class="red">*</span></label></td>
		<td width="423"><input class="required" name="name" id="name" type="text"/>
			</td>
	</tr>
	<tr>
		<td><label>E-mail <span class="red">*</span></label></td>
		<td><input class="required" name="email" id="email" type="text"/>
			</td>
	</tr>
	<tr>
		<td><label>Комментарий <span class="red">*</span></label></td>
		<td><textarea  class="required" name="comment" id="comment" style="width:350px; height:200px;"></textarea>
			<br />
			<br />
			<table>
				<tr>
					<td width="100"><a class="sendEmail"><img src="<?php bloginfo(template_url) ?>/images/button-send.png" width="138" height="44" /></a> <br /></td>
					<td width="400" style="padding-top:20px; padding-left:20px">
					<div class="alert green"></div>
					<div class="alert red"></div>
					</td>
				</tr>
			</table>
			

</td>
	</tr>
</table>
</form>

			
		</div>
		<div class="left contactInfo">
			<h3>Контактная информация</h3>
			Россия, Москва,<br/>
Большой Овчинниковский пер., д 16, эт. 6<br/>
Тел.: +7 495 755 16 57<br/>
E-mail: <a href="mailto:hello@vitaminventures.com">hello@vitaminventures.com</a><br/>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>

<?php get_footer(); ?>