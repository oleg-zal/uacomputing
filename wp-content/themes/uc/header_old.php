<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
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

<title><?php	
	global $page, $paged;
	wp_title( '|', true, 'right' );	
	bloginfo( 'name' );
	?></title>
</head>
</head>

<script>
$(document).ready(function(e) {
	
	$('.btnRequest').each(function(index, element) {
		$(this).click(function(){
			$('.requestForm, .popupBg').fadeIn();
		});
	});
	
	$('.popup a.close').click(function(){
		$('.requestForm, .popupBg').fadeOut();
	});
	
	$('a.sendProj').click(function(e) {
		var valid=true;
			$('.request .required').each(function(index) {
				if($(this).val()!==''){	
					$(this).removeClass('notvalid');
				} else {
					$(this).addClass('notvalid');
					valid=false;
				}				
			});
			
			if(valid){
			$('.request form').submit();
			} else {
			showValidationError();			
			}
		
	});
	
	
		function showValidationError(){
		$('.alert.red').text('Вы не заполнили обязательные поля. Проверьте пожалуйста все поля ещё раз.');
		$('.alert.red').fadeIn(150);
		}
	
	
});
</script>

<div class="popupWrapper requestForm">
	<div class="popup">
	<a class="close"></a>
		<div class="content">
		
		<div class="addForm request">
			<form action="<?php bloginfo('url') ?>/investRequest">
			<div class="absolute" style="margin-left:629px; margin-top:-10px;">
				<img src="<?php bloginfo('template_url') ?>/images/stamp-confidential.png">
			</div>
			<h1>Отправить проект на рассмотрение</h1>
			<div class="desc"><span>
			Опишите подродбно концепцию, рынок, укажите дату запуска, число пользователей, выручку. Расскажите о команде, планах развития</span>
			</div>
			
			
			<table width="521" class="left">
				<tr>
					<th>Название проекта <span class='red'>*</span></th>
					<td><input class="required" name="title" id="title" class="required" type="text"/></td>
				</tr>
				<tr>
					<th>Веб-сайт</td>
					<td><input name="url" id="url" type="text"/></th>
				</tr>
				<tr>
					<th>Тип проекта</th>
					<td><?php wp_dropdown_categories('show_count=1&child_of=9&show_count=0&hide_empty=0&hierarchical=1'); ?></td>
				</tr>
				<tr>
					<th>Описание проекта <span class='red'>*</span><br />
					<i>концепция, рынок, дата запуска, число пользователей, выручка, команда, планы развития</i></th>
					<td><textarea  class="required" style="height:200px; width:350px" name="description"></textarea></td>
				</tr>
				<tr>
					<th>Потребность проекта <span class='red'>*</span><i>Сумма инвестиций</i></th>
					<td><input  class="required" style="width:120px; float:left; display:inline" name="money" class="left" type="text"/><span class="left" style="padding:5px"> $</span></td>
				</tr>
				<tr>
					<th>Назначение инвестиций <span class='red'>*</span></th>
					<td><textarea class="required" style="height:80px; width:350px" name="moneyNeeds"></textarea></td>
				</tr>
				
				</table>
				<div style="width:240px; margin-left:38px; float:left; font-size:12px;">
				


				</div>
				<table width="250" class="left requestFormDescr">
					<tr class="none">
						<th width="20"><img src="<?php bloginfo('template_url') ?>/images/ico-time-grey.png"/></th>
						<td width="230"><h3>5 дней</h3>
						Мы постараемся ответить вам
						</td>
					</tr>
					<tr class="none">
						<th><img src="<?php bloginfo('template_url') ?>/images/ico-lamp.png"/></th>
						<td><h3>Анализ</h3>
						</td>
					</tr>					
					<tr>
						<th style="width:60px !important"><img src="<?php bloginfo('template_url') ?>/images/ico-checkbox.png"/></th>
						<td><!--h3>Рекомендации</h3-->
						Заполнив данную форму, вы отправите свой проект на рассмотрение возможности инвестирования в него со стороны фонда Vitamin Ventures. Информация предоставляется на условиях конфиденциальности, и не будет раскрываться никому, кроме сотрудников фонда, отвечающих за принятие решения по инвестициям.
						</td>
					</tr>					


				</table>
				<div class="clear"></div>
				<h2><span>Контактная информация</span></h2>

				<table>
					<tr>
						<th>Контактное лицо <span class='red'>*</span> </th>
						<td><input name="contactPerson" class="required" id="contactPerson" type="text"/></td>
					</tr>
					<tr>
						<th>E-mail <span class='red'>*</span></th>
						<td><input name="email" class="required" id="email" type="text"/></td>
					</tr>
					<tr>
						<th>Телефон <span class='red'>*</span></th>
						<td><input  name="phone" class="required" id="phone" type="text"/></td>
					</tr>	
					<tr>
						<th>Прикрепить документ</th>
						<td><input type="file"/></td>
					</tr>															
				</table>
				
				<table style="width:800px">
				<tr>
					<td width="150"><a class="sendProj"><img src="<?php bloginfo('template_url') ?>/images/btn-sendProject.png"></a></td>
					<td width="400" style="padding-top:20px; padding-left:20px">
					<div class="alert green"></div>
					<div class="alert red"></div>
					</td>
				</tr>
			</table>
			
			</form>
			
			<div class="clear"></div>
			</div>
		
		</div>
	</div>	
</div>

<div class="popupBg"></div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=511155278901969";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
