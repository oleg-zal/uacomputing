<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
    session_start();
    $lang = getLang();
    $_GET["lang"] = $lang;
?>

<html <?php language_attributes(); ?> >
<head>

<meta name="viewport" content="user-scalable=yes, initial-scale=0.3, minimum-scale=0, maximum-scale=1, width=device-width"/>

<script>
if (navigator.userAgent.match(/iPad/i)) {
    var viewportmeta = document.querySelector('meta[name="viewport"]');
    if (viewportmeta) {
        viewportmeta.content = 'width=960, minimum-scale=0, maximum-scale=1.0, initial-scale=0.7, user-scalable=no';       
    }
}

</script>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="description" content="<?php 
if($_GET["lang"]=='ua'){
	echo('Інформаційні технології в Україні: історії та особистості');	
}

if($_GET["lang"]=='ru'){
	/*the_title();*/
	echo('Информационные технологии в Украине: истории и личности');
}

if($_GET["lang"]=='en'){
	echo('History of Computing in Ukraine: Histories and Personalities');
	
}
?>" />
<meta name="keywords" content="компьютеры, первые компьютеры, ЭВМ, МЭСМ, история компьютеров, IT в Украине, вычислительная техника, Лебедев, Глушков, Амосов, МЭСМ, ОГАС, Плотников, Кудрявцев, Карат, логическая машина, машина логического мышления, Щукарев, Лашкарев, p-n переход, прообразы персональных компьютеров, УМШН Днепр, биокибернетика, Промінь, МИР, МИР-1, МИР-2, БЭСМ, Электронмаш, Буран, ракета Сатана, Хартрон, Южмаш, СС-18, досуг ученых, украинские ученые, ТАИР, МАВР, Борис Малиновский, Моралев, Новохатний, Алещенко, Брусенцов, Зиновий Рабинович, Катерина Ющенко, Квант, Китов, Хрущев, ВЦ АН УССР, винницкий Терминал, ПО Октябрь, ракета-носитель Энергия, киевский радиозавод, КБ Южное, Василенко, Amosov, OGAS, Biocybernetics, Computing history, History of Computing in Ukraine, ИТ в Украине: истории и личности, ІТ в Україні: історії та особистості, Борис Малиновський, Днепр, комп'ютер, українські вчені, досягнення українських вчених, історія СРСР, история СССР, вооружения советского флота, история советского флота, Звезда, soviet history, science, computer, ком'ютер, перший ком'ютер, first computer, первый компьютер, МЕОМ, МЕЛМ, Malinovsky, ЭВМ" />




<!--<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?52"></script>-->

<script type="text/javascript">
  /*VK.init({apiId: 3132790, onlyWidgets: true});*/
</script>

<title>
<?php	
	global $page, $paged;	
	if($_GET["lang"]=='ua'){
		if(get_post_meta($post->ID, 'title_ukr', true)){
			echo(get_post_meta($post->ID, 'title_ukr', true).' | ');
		}
		echo('Історія ІТ в Україні');		
	} else if($_GET["lang"]=='ru'){
		the_title();
		echo(' | История ИТ в Украине');		
	} else if($_GET["lang"]=='en'){
		if(get_post_meta($post->ID, 'title_eng', true)){
			echo(get_post_meta($post->ID, 'title_eng', true).' | ');
		}
		echo('History of Computing in Ukraine');		
	}
	
	?></title>
<link rel="shortcut icon" href="<?php bloginfo('url') ?>/favicon.ico" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/components.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/reset.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/js/basic-jquery-slider.css"/>
<meta property="fb:admins" content="1352755219"/>
<meta property="fb:app_id" content="511155278901969"/>

<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script-->
<script src="<?php bloginfo('template_url')?>/js/jquery-1.6.2.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/basic-jquery-slider.js"></script>



<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
    $class = isset($args['class'])  ? $args['class'] : '';
    //print_r($class); //die();
?>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34765032-1']);
  _gaq.push(['_setDomainName', 'uacomputing.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34765032-1']);
  _gaq.push(['_setDomainName', 'uacomputing.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
------ <?php print_r($class); ?>
<div id="mainWrapper">
	<div id="header">
	<!--table>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table-->
		<div class="contentWrapper menu">
			<div class="googleLogo"><a target="_blank" href="http://google-ukraine-blog.blogspot.com/"><img src="<?php bloginfo('template_url') ?>/images/<?php 
			if($_GET["lang"]=='en'){
				echo('logo-google-eng.png');
			} if($_GET["lang"]=='ru'){
				echo('logo-google.png');
			} if($_GET["lang"]=='ua'){
				echo('logo-google-ukr.png');
			}
			?>
			"/></a></div>
			<div class="logo"><a href="<?php bloginfo('url') ?>"><img class='left' src="<?php bloginfo('template_url') ?>/images/logo-red.png"/><img style="margin:20px 10px;" src="
			<?php bloginfo('template_url') ?>/images/
			<?php 
			if($_GET["lang"]=='en'){
				echo('uc-title-eng.png');
			} if($_GET["lang"]=='ru'){
				echo('uc-title.png');
			} if($_GET["lang"]=='ua'){
				echo('uc-title-ukr.png');
			}
			?>
			"/></a></div>
			<div class="lang">
				<a class="<?php if($_GET["lang"]=='ua'){
					echo('active');
				} ?>" href="<?php get_option('siteurl'); ?>/ua" id="ua">UA</a>
				<a class="<?php if($_GET["lang"]=='en'){
					echo('active');
				} ?>" href="<?php get_option('siteurl'); ?>/en" id="en">EN</a>
				<a class="<?php if($_GET["lang"]=='ru'){
					echo('active');
				} ?>" href="<?php get_option('siteurl'); ?>/ru" id="ru">RU</a>
			</div>
			<div class="navigation <?=$class?>">
				<?php wp_nav_menu( [
                        'theme_location'  => 'primary',
                        'container' => 'ul',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'depth'  => 1
                        ]
                ); ?>
			</div>
		</div>
	</div>
<script>
    const ref = $('.navigation li a')
    //console.log(ref[0].text)
	$(document).ready(function(e) {
	if($('.lang #ru').hasClass('active')){
        ref[0].text = 'Истории';
        ref[1].text = 'Личности';
        ref[2].text = 'Видео';
        ref[3].text = 'Блог';
        ref[4].text = 'Контакты';
	}	else if($('.lang #ua').hasClass('active')){
        ref[0].text = 'Історії';
        ref[1].text = 'Особистості';
        ref[2].text = 'Відео';
        ref[3].text = 'Блог';
        ref[4].text = 'Контакти';
	}   else if($('.lang #en').hasClass('active')){
        ref[0].text = 'Stories';
        ref[1].text = 'Personalities';
        ref[2].text = 'Video';
        ref[3].text = 'Blog';
        ref[4].text = 'Contacts';
		}	
	});
</script>
