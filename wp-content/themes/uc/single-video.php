<?php
/*
Template Name: single-video
Template Post Type: videos
*/
get_header(null, ['class' => 'video']);
?>

<?php while ( have_posts() ) : the_post(); ?>
    <!-- #nav-single -->

    <?php get_template_part( 'content', 'video' ); ?>
<?php endwhile;