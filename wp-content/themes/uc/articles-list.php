<?php /* Template Name: Articles */ ?>
<?php get_header(); ?>


		<div class="middle articleList">		
		<div class="contentWrapper social"><?php include('social.php') ?></div>
		<div class="contentWrapper articleList">
			<?php 
			$args=array(
			  'post_parent' => 6,
			  'order'=>'ASC',
			  'orderby'=> 'menu_order',
			  'post_type' => 'page',
			  'post_status' => 'publish',
			  'posts_per_page' => 100
			);
			query_posts($args); ?>			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="articleItem">
                <div class="imageWrapper"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail');?></div>
                <a href="<?php the_permalink() ?>" class="title">
				<?php 
				if($_GET["lang"]=='en'){
					the_field('title_eng');
				} if($_GET["lang"]=='ru'){
					the_title();
				} if($_GET["lang"]=='ua'){
					the_field('title_ukr');
				}				
				?>
				</a>
				
            </div>
  			<!-- end loop -->
			<?php endwhile; endif; ?>
			 
		</div>
<script>
$(document).ready(function(e) {
	$('.imageWrapper a img').each(function(index, element) {
		$(element).attr('title', '');
	});
});
</script>

<script src="<?php bloginfo('template_url') ?>/js/jquery.masonry.min.js"></script>

<?php get_footer(); ?>
