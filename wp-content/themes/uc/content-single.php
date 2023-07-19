<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

				

		<h1>
		<?php 
		if($_GET["lang"]=='en'){
			the_field('title_eng');
		} 
		
		if($_GET["lang"]=='ua'){
			the_field('title_ukr');
		} 
		
		if($_GET["lang"]=='ru'){
			the_title();
		}
		?>
		</h1>
		
		<?php 
		if($_GET["lang"]=='en'){
			the_field('description_eng');
			
		} 
		
		if($_GET["lang"]=='ru'){
			the_content();
		}
		
		if($_GET["lang"]=='ua'){
			the_field('description_ukr');
			
		}
		
		?>

