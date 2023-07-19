<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="mainWrapper inner">
<div class="blockWrapper header">
	<div class="block">
		<div class="topArea">
			<a href="<?php bloginfo('url') ?>" class="logo"><img src="<?php bloginfo('template_url') ?>/images/vitamin-logo-green.png"/></a>
			<div class="left lang"><a href="#" class="active">RU</a><a href="#">EN</a></div>
			<ul class="menu right">
				<?php wp_nav_menu( array( 'depth'  => 1 ) ); ?> 
			</ul>
			<div class="clear"></div>
		</div>		
	</div>
</div>



<div class="blockWrapper pageHeading">
<div class="blikBg">
	<div class="block">
		<div  class="left">
		<h1>
		Лаборатория
		</h1>
		<!--a href="http://klaxonstudio.com/portfolio/VitaminVentures/slicing/projects.html" class="back">&larr; Вернуться к списку проектов</a-->		</div>
		
		<div class="clear"></div>
	</div>	
</div>	
</div>
<div class="blockWrapper middle">
	<div class="block">
		<div class="subscription entry-content">
		<?php 
		$my_postid = 11;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
echo $content; ?>

		</div>
		<div class="categories">
			<li class="cat-item cat-item-0"><a href='<?php bloginfo('url') ?>/Лаборатория'>Все</a></li>
			<?php wp_list_categories('orderby=name&show_count=1&child_of=3&title_li='); ?>
			<div class="clear"></div>
		</div>
		
		<div class="addForm addToLab none">
	<a class="close"></a>
	<form action="<?php bloginfo('url') ?>/addProjectToLab" method='post' enctype='multipart/form-data'>
	<h1>Опубликовать свой проект в лаборатории</h1>
	<div class="desc">
	<span>
	Опишите подродбно концепцию, рынок, укажите дату запуска, число пользователей, выручку. Расскажите о команде, планах развития</span>
	</div>
	
	
	<table>
		<tr>
			<th>Название проекта <span class='red'>*</span></th>
			<td><input class="required" name="title" id="title" type="text"/></td>
		</tr>
		<tr>
			<th>Веб-сайт</td>
			<td><input name="url" id="url" type="text"/></th>
		</tr>
		
		<tr>
			<th>Лого</th>
			<td>
			<input name='uploadfile' id='uploadfile' type='file'/>
			</td>
		</tr>
		
		<tr>
			<th>Тип проекта</th>
			<td>
			
		
			<?php wp_dropdown_categories('show_count=1&child_of=3&show_count=0&hide_empty=0&hierarchical=1'); ?>
					
			</td>
		</tr>
		<tr>
			<th>Описание проекта <span class='red'>*</span><br />
			<i>концепция, рынок, дата запуска, число пользователей, выручка, команда, планы развития</i></th>
			<td><textarea class="required" style="height:200px; width:350px" name="description"></textarea></td>
		</tr>
		<tr>
			<th>Потребность проекта <span class='red'>*</span><i>Сумма инвестиций</i></th>
			<td><input class="required left" style="width:120px; float:left; display:inline" name="money" type="text"/><span class="left" style="padding:5px; display:inline">$</span></td>
		</tr>
		<tr>
			<th>Назначение инвестиций <span class='red'>*</span></th>
			<td><textarea class="required" style="height:80px; width:350px" name="moneyNeeds"></textarea></td>
		</tr>
		
		</table>
		<h2><span>Узнать мнение аудитории</span></h2>
	
		<table>
			<tr>
				<th>Задать вопрос <em>Узнайте мнение аудитории
	по поводу волнующих вопросов</em></th>
				<td><textarea name="question"></textarea></td>
			</tr>
		</table>
	<table style="width:800px">
		<tr>
			<td width="150"><a class="public"><img src="<?php bloginfo('template_url') ?>/images/button-public.png"></a></td>
			<td width="400" style="padding-top:20px; padding-left:20px">
			<div class="alert green"></div>
			<div class="alert red"></div>
			</td>
		</tr>
	</table>
	
	<div class="clear"></div>
	</form>
	<div class="adminIntro">
		<div class="quote">
		Не бойтесь показаться смешными. Все проекты по-своему. Мы не являемся занудами и с удовольствием покажем вам сильные и слабые стороны вашего стартапа				
		</div>
		<img src="<?php bloginfo('template_url') ?>/images/quote-down.png" style="margin-left:50px"/>
		<div class="adminVcard">
			<img src="<?php bloginfo('template_url') ?>/images/partner-photo1.jpg"/><br />
	
			<strong>Илья Олейников</strong><br/>
			Сооснователь VitaminVentures модератор лаборатории.
		</div>
	</div>
</div>
		
		<script src="<?php bloginfo('template_url') ?>/js/lab.js"></script>
		<div class="projListWrapper">
		<ul class="projList">
			<li class="add item">
				<a>
					Опубликовать свой проект в лаборатории
				</a>
			</li>
				<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>
				<?php endwhile; ?>
			<?php endif; ?>
		</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<script src="http://masonry.desandro.com/jquery.masonry.min.js"></script>
<script type="text/javascript">
    $(document).ready(new function() {
      // Prepare layout options.
      $('.projList').masonry({
		itemSelector: 'li.item',
		columnWidth: 240,
	    animationOptions: {
		duration: 800
	 }
});
});
</script>
<?php get_footer(); ?>
