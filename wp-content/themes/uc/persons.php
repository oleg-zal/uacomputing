<?php /* Template Name: Persons */ ?>
<?php get_header(); ?>

		<div class="middle personListWrapper">		
		<div class="contentWrapper social"><?php include('social.php') ?></div>
		<div class="contentWrapper personList">
			<?php 
			$args=array(
			  'post_parent' => 9,
			  'order'=>'ASC',
			  'orderby'=> 'title',
			  'post_type' => 'page',
			  'post_status' => 'publish',
			  'posts_per_page' => 100
			);
			query_posts($args); ?>	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="item">
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
		<div class="clear"></div>

<?php get_footer(); ?>
