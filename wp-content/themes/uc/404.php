<?php get_header(); ?>

	<div class="middle" id="articlePage">
        <div class="prevNextBar">
			<div class="prev"><?php echo previous_page_not_post(''); ?></div>              
			<div class="next"><?php echo next_page_not_post(''); ?></div>
        </div>
		
		
		
	<div class="contentWrapper">	
	
		<div class="contentWrapper article">	
	<?php if($_GET["lang"]=='en'){?>
	<h3 style="font-size:30px">Error 404</h3>	
		Page doesn`t exist.

	
<?php } ?>
	
<?php if($_GET["lang"]=='ua'){?>
	<h3 style="font-size:30px">Помилка 404</h3>	
		Сторінка не існує.
<br/><br/><br/><br/><br/>
	
<?php } ?>
	
<?php if($_GET["lang"]=='ru'){?>
	<h3 style="font-size:30px">Ошибка 404</h3>	
		Страница не найдена.
<br/><br/><br/><br/><br/>
	
<?php } ?>
<br/><br/><br/><br/><br/>
		</div>
		
		
	</div>
	
<?php get_footer(); ?>