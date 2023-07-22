<?php /* Template Name: Feedback */ ?>
<?php get_header(); ?>

<form method="POST" action="<?php echo admin_url('admin-post.php') ?>" >
<?php if($_GET["lang"]=='en'){ ?>
<div class="middle" id="articlePage">
<div class="contentWrapper social"><?php include('social.php') ?></div>
<div class="contentWrapper feedback feedback-eng">	
<h1 class="center">Want to share your story - <br/>contact us</h1>
	<div class="formWrapper" >
    <?php outputMes();?>
	<input name="name" type="text"/>
	<input type="hidden" name="lang" value="<?php echo($_GET["lang"]) ?>">
	<input name="email" type="text"/>
        <input type="hidden" name="action" value="feedback"/>
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
            <?php outputMes();?>
			<input type="hidden" name="lang" value="<?php echo($_GET["lang"]) ?>"/>
            <input name="name" type="text"/>
            <input name="email" type="text"/>
                <input type="hidden" name="action" value="feedback"/>
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
            <?php outputMes();?>
			<input type="hidden" name="lang" value="<?php echo($_GET["lang"]) ?>"/>
            <input name="name" type="text"/>
            <input name="email" type="text"/>
                <input type="hidden" name="action" value="feedback"/>
            <!--<input type="file"/>-->
            <textarea name="comment"></textarea>
            <input type='submit' value="Відправити"/>			
            </div>
			<div class="clear"></div>
<?php } ?>	
</form>
<?php get_footer(); ?>