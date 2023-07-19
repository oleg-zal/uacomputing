<?php /* Template Name: Projects*/ ?>
<?php get_header(); ?>
<script>
$(document).ready(function(e) {
	$('.projList a').each(function(index, element) {
		$(this).removeAttr('href');
	});
	
	$('.cat-item').each(function(index, element) {
		$(this).click(function(){
			$('.cat-item.current_page_item').removeClass('current_page_item');
			$(this).addClass('current_page_item');			
		});
	});

	$('.categories a').each(function(index, element) {
		$(this).removeAttr('href');
	});

/*click*/
	$('.projList li').each(function(index, element) {
		$(this).click(function(){			
			loadContentToPopup(this, $(this).index());
/*			alert($(window).scrollTop());*/
			$('.ownProject .popup').css({ 'margin-top': ($(window).scrollTop()+50)+'px'});						
		});
	});
	
	function clearPopupContent(){
		/*$('.ownProject #title').text($(listItem).find('h3').text());*/
	}
	
	function loadContentToPopup(listItem){
		$('.ownProject, .popupBg').fadeIn();
			window.curentElement = listItem;
			
			$('.ownProject #title').text($(listItem).find('h3').text());
			$('.ownProject #imageWrapper').html($(listItem).find('.bigImage').html());
			$('.ownProject #content').html($(listItem).find('.fullContent').html());	
			
			$('.ownProject #categories').html($(listItem).find('.category').html());	
			$('.ownProject #url a').text($(listItem).find('.url').text());
			
			/*$('.ownProject #url a').attr('href','http://'.$(listItem).find('.url').html());				*/
			
/*			alert($(window.curentElement).next().html());*/
			
			
			if($(window.curentElement).next().html()!==null){
				$('a.arrow-right').show()
			} else {
				$('a.arrow-right').hide()	
			}
			
			if($(window.curentElement).prev().html()!==null){
				$('a.arrow-left').show()
			} else {
				$('a.arrow-left').hide()	
			}
			
			
			
	}

		$('a.arrow-right').click(function(e) {
		loadContentToPopup($(window.curentElement).next());
		});
		
		$('a.arrow-left').click(function(e) {		
		loadContentToPopup($(window.curentElement).prev());
		});
	
	
	$('.popup a.close').click(function(){
		$('.ownProject, .popupBg').fadeOut();
	});
	
	
});
</script>


<div class="popupWrapper ownProject">
	<div class="popup">
	<a class="arrow arrow-left"></a>
	<a class="arrow arrow-right"></a>
	<a class="close"></a>
		<div id="imageWrapper"></div>
		<div class="content">
			<h1 id="title"></h1>
			<div id="categories" class="none"></div>					
			<div id="url"><a href=""></a><br/><br/></div>
			<div id="content"></div>
			
		</div>
	</div>	
</div>


<div class="mainWrapper inner ownProjectsList">
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
		<div class="subscription">
		Мы поверили в этих ребят и с  удовольствием нашли для них инвесторов. Мы гордимся тем, что в нашей стране существуют настолько
	интересные и переспективные проекты и доказательством тому служит интерес зарубежных инвесторов.		
		</div>
		<div class="categories none">
			<?php wp_list_categories('orderby=name&show_count=1&child_of=9&title_li='); ?>
			<div class="clear"></div>
		</div>

		<ul class="projList">
			
			<!-- loop -->
			<?php query_posts('cat=9'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			  <li>
			  	<a href="<?php the_permalink() ?>">
				<div class="imageWrapper"><?php the_post_thumbnail('thumbnail'); ?></div>
				<div class="bigImage none"><?php the_post_thumbnail('medium'); ?></div>
				</a>
					<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
					<span class="category none"><?php the_category() ?><div class="clear"></div></span>
					
					<div class="description">						
					<?php the_excerpt() ?>
					</div>
					<div class="fullContent none"><?php the_content() ?></div>
					<div class="url none"><?php the_field('url') ?></div>
					
					<div class="comments">


				</div>
			  </li>
  			<!-- end loop -->
			<?php endwhile; endif; ?>
		</ul>
		<div class="clear"></div>
	</div>
</div>
<script src="<?php bloginfo('template_url') ?>/js/jquery.masonry.min.js"></script>
<script type="text/javascript">
    $(document).ready(new function() {
      // Prepare layout options.
      $('.projList').masonry({
		  itemSelector: 'li',
		  columnWidth: 240,
		  animationOptions: {
			duration: 800
		  }
});
});
</script>
<?php get_footer(); ?>