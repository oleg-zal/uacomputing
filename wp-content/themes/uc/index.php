<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(null, ['class' => 'blog']); ?>

	<div class="contentWrapper social"><?php include('social.php') ?></div>


	<div class="middle" id="articlePage">        
		
	<div class="contentWrapper social"><?php include('social.php') ?></div>
	<!--div class="contentWrapper"><h1>Блог</h1></div-->
	
		<div class="contentWrapper article blog">	
			<?php /*query_posts(); */?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
                <div class="blogItem">
					<a href="<?php the_permalink() ?>" class="title"><?php 
				
				if($_GET["lang"]=='en'){
					the_field('title_eng');
				} 
				
				if($_GET["lang"]=='ru'){
					the_title();
				}
				
				if($_GET["lang"]=='ua'){
					the_field('title_ukr');
				} 
				
				?></a><br/>
				
				<?php 
				if($_GET["lang"]=='en'){
					echo(get_field('annotation_eng').'...');
				} 
				
				if($_GET["lang"]=='ua'){
					echo(get_field('annotation_ukr').'...');
				} 
				
				if($_GET["lang"]=='ru'){		
					echo(get_field('annotation_rus').'...');
				}
				?>
				
				
				</div>
    		<?php endwhile;
                $args = array(
                    'prev_next' => false,
                    'mid_size'     => 2,
                );
            echo get_the_posts_pagination($args);
            endif; ?>


		</div>
		
	</div>
		
<?php get_footer(); ?>