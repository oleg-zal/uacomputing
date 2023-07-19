<?php


get_header(); ?>

<div class="middle" id="articlePage">
<div class="contentWrapper social">	
	<?php include('social.php') ?></div>
<div class="contentWrapper article">	
<div style="width:600px !important; display:block">
<?php while ( have_posts() ) : the_post(); ?>		
<!-- #nav-single -->		

<?php get_template_part( 'content', 'single' ); ?>	
<?php endwhile; // end of the loop. ?>
</div>
</div>
</div>
<?php get_footer(); ?>