<?php /* Template Name: investRequest */ ?>
<?php get_header(); ?>

<?php 

$to = "hello@klaxonstudio.com"; 
$subject = "Заявка на инвестицию с сайта vitaminventures.com"; 

$title = $_GET['title'] ; 
$url = $_GET['url'] ; 
$typeCat = $_GET['cat'];
$description = $_GET['description'] ;
$money = $_GET['money'] ; 
$moneyNeeds = $_GET['moneyNeeds'];
$contactPerson = $_GET['contactPerson'];
$email = $_GET['email'];
$phone = $_GET['phone'];


/*$sent = mail($to, $subject, $comment, $headers);*/

	$message = 
	"<html>
	<head>
	<title>Заявка на инвестицию с сайта vitaminventures.com</title>
	</head>
	<body>	
	Вам была отправлена заяка на инвестирование с сайта vitaminventures.com<br/>
	<hr/>
	<h2>Информация о проекте:</h2>
	<p>Название проекта: <b>".$title."</b></p>
	<p>Веб-сайт: <b>".$url."</b></p>
	<p> Тип проекта: <b>".$typeCat."</b></p>
	<p> Описание проекта: <b>".$description."</b></p>	
	<p> Потребность проекта: <b>".$money."</b></p>
	<p> Назначение инвестиций: <b>".$moneyNeeds."</b></p>
	<hr/>
	<h2>Контактная информация:</h2>
	<p> Контактное лицо: <b>".$contactPerson."</b></p>
	<p> E-mail: <b>".$email."</b></p>
	<p> Телефон: <b>".$phone."</b></p>
	
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