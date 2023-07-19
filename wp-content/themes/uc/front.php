<?php /* Template Name: Front */ ?>
<?php get_header() ?>
<script src="http://uacomputing.com/langRedirect.js"></script>
<style>
html{overflow-y:hidden}
</style>
<div class="middle" id="homePage" style=" height:100%; width:100%;">
	<?php var_dump($_GET["lang"]);?>
    <div class="contentWrapper">
		<div style="padding:60px 60px 40px 60px; color:#CCC; position:absolute; z-index:9999; width:800px; font-size:16px; margin:0 auto;" class="taglineWrapper">
		<h1 class="left" style="width:auto; max-width:500px; clear:both">
		<?php
		if($_GET["lang"]=='en'){
			the_field('title_eng');
		} 
		if($_GET["lang"]=='ru'){
			the_title();
		}	
		if($_GET["lang"]=='ua'){
			the_field('title_ukr');			
		}
		
		?>
		</h1><a href="<?php bloginfo('url') ?>/stories" class="right 
		<?php 
			if($_GET["lang"]=='en'){
				echo('view-eng');
			}
			if($_GET["lang"]=='ru'){
				echo('view');
			}
			
			if($_GET["lang"]=='ua'){
				echo('view-ukr');
			}
			?>
		"></a>
		<div class="clear"></div>
		<?php
		if($_GET["lang"]=='en'){
			the_field('description_eng');
		} 
		
		if($_GET["lang"]=='ua'){
			the_field('description_ukr');
		} 
		
		if($_GET["lang"]=='ru'){
			while ( have_posts() ) : the_post();					
			get_template_part( 'content', 'page' );					
			endwhile;		
		} 
		?>
		</div>
	</div>

<div class="mainPhoto">
<ul class="bjqs">

<li style="position:absolute;">
<img src="<?php bloginfo('template_url') ?>/images/mainPhoto2.jpg" style="min-width:100%; min-height:100%"/>
</li>


<li style="position:absolute; ">
<img src="<?php bloginfo('template_url') ?>/images/mainPhoto3.jpg" style="min-width:100%; min-height:100%"/>
</li>

<li style="position:absolute; ">
<img src="<?php bloginfo('template_url') ?>/images/mainPhoto4.jpg" style="min-width:100%; min-height:100%"/>
</li>

<li style="position:absolute; ">
<img src="<?php bloginfo('template_url') ?>/images/mainPhoto5.jpg" style="min-width:100%; min-height:100%"/>
</li>

</ul>

	<div class="contentWrapper" style="margin-top:200px;">
	</div>

</div>
</div>
<script>

$(document).ready(function(){
	
$('.mainPhoto').fadeIn(500);

$(".mainPhoto").bjqs({
    'animationDuration' : 1200,
	'rotationSpeed': 4000,
    'showMarkers' : false,
    'centerControls' :true,
	'automatic': true,
	'hoverPause': false,
    'useCaptions' : false,
    'keyboardNav' : false
});


});

</script>
<?php /*get_footer(); */?>
