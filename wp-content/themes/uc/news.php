<?php /* Template Name: News*/ ?>
<?php get_header(); ?>

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
		<?php if (is_page()) {
		  if (!empty($post->post_parent)) {
		   $extradata = $wpdb->get_row("select post_title from wp_posts where ID = " . $post->post_parent);
		   echo $extradata->post_title.' &rarr; ';
		 } 
		}
		?><?php the_title() ?>
		</h1>
		<!--a href="http://klaxonstudio.com/portfolio/VitaminVentures/slicing/projects.html" class="back">&larr; Вернуться к списку проектов</a-->		</div>
		<a class="right button btnRequest"><img src="<?php bloginfo('template_url') ?>/images/button-invest-request.png" /></a>
		<div class="clear"></div>
	</div>		
</div>
</div>
<div class="blockWrapper middle">
	<div class="block">
		

		<div class="contentPageWrapper">
			<div class="content">
			
			<?php query_posts('cat=18&showposts=50'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="newsItem">
			  
				<span style="color:#999; font-size:11px;"><?php echo(get_the_date()) ?></span><br/>
			  	<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
			</div>
  			<!-- end loop -->
			<?php endwhile; endif; ?>
			
			</div>
			
		</div>
	</div>
</div>

<?php get_footer(); ?>