<?php /* Template Name: sendContactForm */ ?>
<?php get_header(); ?>
<?php 
$to = "hello@klaxonstudio.com"; 
$subject = "Вопрос с сайта vitaminventures.com"; 

$name = $_GET['name'] ; 
$email = $_GET['email'];
$comment = $_GET['comment'];


/*$sent = mail($to, $subject, $comment, $headers);*/

	$message = 
	"<html>
	<head>
	<title>Вопрос  с сайта vitaminventures.com</title>
	</head>
	<body>	
	Вам был отправлен вопрос с сайта vitaminventures.com<br/>
	<hr/>
	<p>НИмя: <b>".$name."</b></p>
	<p>Веб-сайт: <b>".$emal."</b></p>
	<p> Тип проекта: <b>".$comment."</b></p>
	</body>
	</html>";
	
	
	$headers = "From: $email";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	$sent = mail($to, $subject, $message , $headers);
	if($sent) 
	{
	$alert_good = "Ваше сообщение отправлено. Мы ответим в ближайшее время.";
	}
	else {
	$alert_bad = "Что-то не так. Ваше сообщение не отправлено :(";
	}

?>


<div class="mainWrapper inner">
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
	<div class="block">
		<div  class="left">
		<h1>
		<?php the_title() ?>
		</h1>
	</div>
		
		<div class="clear"></div>
	</div>		
</div>
<div class="blockWrapper middle">
	<div class="block">
	<div class="contentPageWrapper">
	<div class="content">
		<?php echo $alert_good ?>
		<?php echo $alert_bad ?>

		
	</div>
	</div>
	</div>
</div>


<!--SCRIPT>
window.location='<?php bloginfo('url') ?>/Лаборатория?alert_good=<?php echo $alert_good ?>&alert_bad=<?php echo $alert_bad ?>';
</SCRIPT-->
<?php get_footer(); ?>