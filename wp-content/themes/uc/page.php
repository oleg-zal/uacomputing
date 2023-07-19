<?php get_header(); ?>

	<div class="middle" id="articlePage">
        <div class="prevNextBar">
			<div class="prev"><?php echo previous_page_not_post(''); ?></div>              
			<div class="next"><?php echo next_page_not_post(''); ?></div>
        </div>
		
		
		
	<div class="contentWrapper social">	
	<?php include('social.php') ?></div>
	
	<script src="<?php bloginfo('template_url') ?>/js/quotes.js"></script>
	
	
	<?php if($post->post_parent == 6){ ?>
	
	
	<?php if($_GET["lang"]=='en'){?>
	<script src="<?php bloginfo('template_url') ?>/js/replacePhotoDescription-en.js"></script>
	<?php } ?>
	
	<?php if($_GET["lang"]=='ru'){?>
	<script src="<?php bloginfo('template_url') ?>/js/replacePhotoDescription-ru.js"></script>
	<?php } ?>
	
	<?php if($_GET["lang"]=='ua'){?>
	<script src="<?php bloginfo('template_url') ?>/js/replacePhotoDescription-ua.js"></script>
	<?php } ?>
	
	<script>
	$(document).ready(function(e) {
		if($('.subscription #page60 #p10')){
			$string = $('#page60 #p10').text();
			$limit = 50;
			$croped1 = $string.substring(0, 300);
			$('#page60 #p10').html($croped1 + '... &rarr;');
		}
		
		if($('#page66 #p3')){
			$string2 = $('#page66 #p3').text();
			$croped2 = $string2.substring(0, 300);
			$('#page66 #p3').html($croped2 + '... &rarr;');
		}
		
		if($('#page66 #p5')){
			$string3 = $('#page66 #p5').text();
			$croped3 = $string3.substring(0, 300);
			$('#page66 #p5').html($croped3 + '... &rarr;');
		}
		
		if($('#page66 #p11')){
			$string4 = $('#page66 #p11').text();
			$croped4 = $string4.substring(0, 300);
			$('#page66 #p11').html($croped4 + '... &rarr;');
		}

		if($('#page66 #p14')){
			$string5 = $('#page66 #p14').text();
			$croped5 = $string5.substring(0, 300);
			$('#page66 #p14').html($croped5 + '... &rarr;');
		}
		
		if($('#page76 #p9')){
			$string6 = $('#page76 #p9').text();
			$croped6 = $string6.substring(0, 100);
			$('#page76 #p9').html($croped6 + '... &rarr;');
		}
		
		if($('#page68 #p9')){
			$string7 = $('#page68 #p9').text();
			$croped7 = $string7.substring(0, 300);
			$('#page68 #p9').html($croped7 + '... &rarr;');
		}
		
		if($('#page84 #p2')){
			$string8 = $('#page84 #p2').text();
			$croped8 = $string8.substring(0, 450);
			$('#page84 #p2').html($croped8 + '... &rarr;');
		}
		
		if($('#page90 #p14')){
			$string9 = $('#page90 #p14').text();
			$croped9 = $string9.substring(0, 250);
			$('#page90 #p14').html($croped9 + '... &rarr;');
		}
		
		if($('#page90 #p15')){
			$string10 = $('#page90 #p15').text();
			$croped10 = $string10.substring(0, 250);
			$('#page90 #p15').html($croped10 + '... &rarr;');
		}			
		
	});
	</script>
	
		<div class="contentWrapper article">	
		<!--div class="year">1987</div-->
        	<table class="articleHeader" width="100%">
            <tr>
                <td width="100%"><h1>				
				<?php 
				if($_GET["lang"]=='en'){
					the_field('title_eng');
				} if($_GET["lang"]=='ru'){
					the_title();
				} if($_GET["lang"]=='ua'){
					the_field('title_ukr');
				}
				 ?>
				</h1>
					
					<div class="annotation"> 
					<?php 
					if($_GET["lang"]=='en'){
						the_field('annotation_eng');
					} if($_GET["lang"]=='ru'){
						the_field('annotation');
					} if($_GET["lang"]=='ua'){
						the_field('annotation_ukr');
					}
					 ?> </div></td>
                <td class="illustration">
					<?php the_post_thumbnail('medium') ?></td>
            </tr>
            </table>
          
            <table width="100%" id="page<?php the_id() ?>" class="<?php echo($_GET["lang"]) ?>">
            	<tr>
                <td class="markers">									
					<?php 					
					$bios =  get_field('bio');					
					?>
					<h4>
					<?php
					switch ($_GET["lang"]){
						case 'en':
						echo('Bio:<br/>');
						break;
						
						case 'ru':
						echo('Биография:<br/>');
						break;
						
						case 'ua':
						echo('Біографії:<br/>');
						break;							
					}
					?>
					</h4>
					<?php
					

					for($i=0;$i<count($bios);$i++){
						$biosArray = split('/',$bios[$i]);						
  						if($_GET["lang"]=='en'){
						
						echo('<a class="bio" id="'.$biosArray[4].'" href="'.$bios[$i].'"><div class="imageWrapper">'.get_the_post_thumbnail(url_to_postid($bios[$i])).'</div><span>'.get_post_meta(url_to_postid($bios[$i]), 'title_eng', true).'</span></a><br/>');							
						}
						
						if($_GET["lang"]=='ru'){
						
						echo('<a class="bio" id="'.$biosArray[4].'" href="'.$bios[$i].'"><div class="imageWrapper">'.get_the_post_thumbnail(url_to_postid($bios[$i])).'</div><span>'.get_the_title(url_to_postid($bios[$i])).'</span></a><br/>');							
						}
						
						if($_GET["lang"]=='ua'){
						
						echo('<a class="bio" id="'.$biosArray[4].'" href="'.$bios[$i].'"><div class="imageWrapper">'.get_the_post_thumbnail(url_to_postid($bios[$i])).'</div><span>'.get_post_meta(url_to_postid($bios[$i]), 'title_ukr', true).'</span></a><br/>');							
						}
						
					}
					?>
				</td>
                <td class="content">
					<?php while ( have_posts() ) : the_post(); ?>
					<?php 
					if($_GET["lang"]=='en'){
						the_field('description_eng');
					}if($_GET["lang"]=='ru'){
						get_template_part( 'content', 'page' );
					} if($_GET["lang"]=='ua'){
							the_field('description_ukr');
						}
					?>
					
					<?php endwhile; // end of the loop. ?>					
                </td>
              </tr>
            </table>
			<div class="images">
				<?php the_field('images') ?>
			</div>

		</div>
		<?php } ?>
		
		<?php if($post->post_parent == 9){ ?>
		<div class="contentWrapper person">	
		<!--div class="year">1987</div-->
        	<table class="articleHeader" width="100%">
            <tr>
                <td class="photo">
				<div class="imageWrapper">
					<?php the_post_thumbnail() ?>
				</div>
				</td>

                <td width="100%">				
					<h1>
					
					<?php 
					if($_GET["lang"]=='en'){
						the_field('title_eng');
					} if($_GET["lang"]=='ru'){
						the_title();
					} if($_GET["lang"]=='ua'){
							the_field('title_ukr');
						}
					?>
					</h1>
					<!--h2>Первый в континентальной Европе компьютер</h2-->
					<div class="annotation"> 
						
						<?php 
						if($_GET["lang"]=='en'){
							the_field('annotation_eng');
						} if($_GET["lang"]=='ru'){
							the_field('annotation');
						} if($_GET["lang"]=='ua'){
							the_field('annotation_ukr');
						}
						?>
					</div></td>
            </tr>
            </table>
			<div class="article personContent">
            <table width="100%" class="<?php echo($_GET["lang"]) ?>" id="page<?php the_id() ?>">
            	<tr>
                <td class="markers">
				
				</td>
                <td class="content">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php 
						if($_GET["lang"]=='en'){
							the_field('description_eng');
						} if($_GET["lang"]=='ru'){
							get_template_part( 'content', 'page' );
						} if($_GET["lang"]=='ua'){
							the_field('description_ukr');
						}	
						?>
					<?php endwhile; // end of the loop. ?>					
                </td>
              </tr>
            </table>
			</div>
		</div>
		<?php } 
		
		if($post->ID == 482) { /*Video*/?>
		<div class="contentWrapper page">	
		
				<!--h1><?php the_title() ?></h1-->
				<?php if($_GET["lang"]=='en'){
					the_field('description_eng');
				} ?>
				<?php if($_GET["lang"]=='ru'){ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; ?>	
				<?php } ?>
				<?php if($_GET["lang"]=='ua'){
					the_field('description_ukr');
				} ?>
				
		</div>
		<?php } ?>
	</div>
	<script>
	$(document).ready(function(e) {
		$('img').each(function(index, element) {
			$(element).attr('title',$(element).attr('alt'));
		});
		
		$('.illustration img').each(function(index, element) {
			$(element).attr('title','');
		});
	});
	</script>
	
<?php get_footer(); ?>