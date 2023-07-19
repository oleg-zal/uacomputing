<?php wp_footer(); 
?>

<div class="contentWrapper footer">
<div class="left">
<?php if($_GET["lang"]=='en'){ ?>
<b>More information on <a href="http://ukrainiancomputing.info">
ukrainiancomputing.info</a></b>

<br/>
Uacomputing.com © All rights reserved, 2012

<?php } ?>

<?php if($_GET["lang"]=='ru'){ ?>
<b>Больше информации на <a href="http://ukrainiancomputing.info">
ukrainiancomputing.info</a></b><br/>
Uacomputing.com © Все права защищены, 2012
<?php } ?>

<?php if($_GET["lang"]=='ua'){ ?>
<b>Більше інформації на <a href="http://ukrainiancomputing.info">
ukrainiancomputing.info</a></b><br/>
Uacomputing.com © Всі права захищені, 2012
<?php } ?><br/><br/>
</div>
<div class="left">
<a href="http://www.klaxonstudio.com" target="_blang" class="klaxonLogo"><img src="<?php bloginfo('template_url') ?>/images/logo-klaxon-en.png"/></a>
</div>
<div class="right" style="width:218px; font-size:12px; display:block">
<a href="https://plus.google.com/112679898124236754029?prsrc=3" rel="publisher" style="text-decoration:none;"><table>
	<tr>
		<td width="50">
			
			<img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/>
		
		</td>
		<td style="font-size:12px; line-height:125%">
		<?php if($_GET["lang"]=='ua'){ ?> Слідкуйте за нами<br/>на нашій сторінці в Google+<?php } ?>
		<?php if($_GET["lang"]=='ru'){ ?> Следите за нами <br/>
		на нашей странице в Google+<?php } ?>
		<?php if($_GET["lang"]=='en'){ ?> Follow us <br/>on our Google+ page <?php } ?>
		</td>
	</tr>
</table>
</a>
</div>
<div class="clear"></div>

</div>
</body>
</html>