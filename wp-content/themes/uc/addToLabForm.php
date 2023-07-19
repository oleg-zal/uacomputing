<div class="addForm addToLab none">
			<a class="close"></a>
			<form action="<?php bloginfo('url') ?>/addProjectToLab" method='post' enctype='multipart/form-data'>
			<h1>Опубликовать свой проект в лаборатории</h1>
			<div class="desc">
			<span>
			Опишите подродбно концепцию, рынок, укажите дату запуска, число пользователей, выручку. Расскажите о команде, планах развития</span>
			</div>
			
			
			<table>
				<tr>
					<th>Название проекта <span class='red'>*</span></th>
					<td><input class="required" name="title" id="title" type="text"/></td>
				</tr>
				<tr>
					<th>Веб-сайт</td>
					<td><input name="url" id="url" type="text"/></th>
				</tr>
				
				<tr>
					<th>Лого</th>
					<td>
					<input name='uploadfile' id='uploadfile' type='file'/>
					</td>
				</tr>
				
				<tr>
					<th>Тип проекта</th>
					<td>
					
				
					<?php wp_dropdown_categories('show_count=1&child_of=3&show_count=0&hide_empty=0&hierarchical=1'); ?>
							
					</td>
				</tr>
				<tr>
					<th>Описание проекта <span class='red'>*</span><br />
					<i>концепция, рынок, дата запуска, число пользователей, выручка, команда, планы развития</i></th>
					<td><textarea class="required" style="height:200px; width:350px" name="description"></textarea></td>
				</tr>
				<tr>
					<th>Потребность проекта <span class='red'>*</span><i>Сумма инвестиций</i></th>
					<td><input class="required left" style="width:120px; float:left; display:inline" name="money" type="text"/><span class="left" style="padding:5px; display:inline">$</span></td>
				</tr>
				<tr>
					<th>Назначение инвестиций <span class='red'>*</span></th>
					<td><textarea class="required" style="height:80px; width:350px" name="moneyNeeds"></textarea></td>
				</tr>
				
				</table>
				<h2><span>Узнать мнение аудитории</span></h2>

				<table>
					<tr>
						<th>Задать вопрос <em>Узнайте мнение аудитории
	по поводу волнующих вопросов</em></th>
						<td><textarea name="question"></textarea></td>
					</tr>
				</table>
			<table style="width:800px">
				<tr>
					<td width="150"><a class="public"><img src="<?php bloginfo('template_url') ?>/images/button-public.png"></a></td>
					<td width="400" style="padding-top:20px; padding-left:20px">
					<div class="alert green"></div>
					<div class="alert red"></div>
					</td>
				</tr>
			</table>
			
			<div class="clear"></div>
			</form>
			<div class="adminIntro">
				<div class="quote">
				Не бойтесь показаться смешными. Все проекты по-своему. Мы не являемся занудами и с удовольствием покажем вам сильные и слабые стороны вашего стартапа				
				</div>
				<img src="<?php bloginfo('template_url') ?>/images/quote-down.png" style="margin-left:50px"/>
				<div class="adminVcard">
					<img src="<?php bloginfo('template_url') ?>/images/partner-photo1.jpg"/><br />

					<strong>Илья Олейников</strong><br/>
					Сооснователь VitaminVentures модератор лаборатории.
				</div>
			</div>
			
			</div>