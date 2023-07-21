<?php /* Template Name: Feedback */ ?>
<?php get_header(); ?>

<form action="<?php bloginfo('template_url') ?>/sendContactForm.php">
<?php if($_GET["lang"]=='en'){ ?>
<div class="middle" id="articlePage">
<div class="contentWrapper social"><?php include('social.php') ?></div>
<div class="contentWrapper feedback feedback-eng">	
<h1 class="center">Want to share your story - <br/>contact us</h1>
	<div class="formWrapper" >
	<div class="feedbackAlert">
	<?php
	if($_GET["sent"]=='1'){
	?>
	<span class="green">Thanks, your message has been sent!</span>
	<?php
	} else if($_GET["sent"]=='0'){
	?>
	<span class="red">Something wrong :( Please try again later.</span>
	<?php
	} 
	?>
	</div>
	<input name="name" type="text"/>
	<input type="hidden" name="lang" value="<?php echo($_GET["lang"]) ?>">
	<input name="email" type="text"/>
	<!--input name="attach" type="file"/-->
	<textarea name="comment"></textarea>
	<input type='submit' value="Send"/>
	</div>
		<div class="clear"></div>
</div>
<?php } ?>
<?php if($_GET["lang"]=='ru'){ ?>
		<div class="middle" id="articlePage">
		<div class="contentWrapper social"><?php include('social.php') ?></div>
		<div class="contentWrapper feedback">	
        <h1 class="center">Хотите поделиться своей историей - <br/>пишите нам</h1>
        <div class="center none">Согласно предыдущему, ощущение мира создает естественный позитивизм, изменяя привычную реальность. Исчисление предикатов, по определению, дискредитирует здравый смысл, отрицая очевидное.</div>
        	<div class="formWrapper" >
			<div class="feedbackAlert">
			<?php
			if($_GET["sent"]=='1'){
			?>
			<span class="green">Спасибо, Ваше сообщение отправлено!</span>
			<?php
			} else if($_GET["sent"]=='0'){
			?>
			<span class="red">Ваше сообщение не отправлено :( Попробуйте ещё раз.</span>
			<?php
			} 
			?>
			</div>
			<input type="hidden" name="lang" value="<?php echo($_GET["lang"]) ?>"/>
            <input name="name" type="text"/>
            <input name="email" type="text"/>
            <!--<input type="file"/>-->
            <textarea name="comment"></textarea>
            <input type='submit' value="Отправить"/>
					
            </div>
		</div>
<?php } ?>		

<?php if($_GET["lang"]=='ua'){ ?>
		<div class="middle" id="articlePage">
		<div class="contentWrapper social"><?php include('social.php') ?></div>
		<div class="contentWrapper feedback feedback-ukr">	
        <h1 class="center">Бажаєте розказати власну історію - <br/>напишіть нам</h1>
       
        	<div class="formWrapper" >
			<div class="feedbackAlert">
			<?php
			if($_GET["sent"]=='1'){
			?>
			<span class="green">Спасибі, Ваше повідомлення відправлено!</span>
			<?php
			} else if($_GET["sent"]=='0'){
			?>
			<span class="red">Ваше повідомлення не відправлено :( Спробуйте ще раз.</span>
			<?php
			} 
			?>
			</div>
			<input type="hidden" name="lang" value="<?php echo($_GET["lang"]) ?>"/>
            <input name="name" type="text"/>
            <input name="email" type="text"/>
            <!--<input type="file"/>-->
            <textarea name="comment"></textarea>
            <input type='submit' value="Відправити"/>			
            </div>
			<div class="clear"></div>
<?php } ?>	
</form>
<?php get_footer(); ?>