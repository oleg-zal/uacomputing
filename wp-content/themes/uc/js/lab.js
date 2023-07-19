$(document).ready(function(e) {
	$('.categories a').each(function(index, element) {
	});
	
	$('.page-item-11').addClass('current_page_item');
	
	function hideAllItems(){
		$('.projList li').each(function(index, element) {
			$(this).hide();
		});
	}
	
	function showItemsFromCat(catName){
		$('.projList li').each(function(index, element) {
			if(!$(this).find('.post-categories').text()==catName){
				$(this).addClass('hidden');
			}
		});
	}
	
	$('.cat-item').each(function(index, element) {
		$(this).click(function(){
			$('.cat-item.current_page_item').removeClass('current_page_item');
			$('.cat-item.current-cat').removeClass('current-cat');
			$(this).addClass('current_page_item');			
/*
			hideAllItems();
			showItemsFromCat($(this).text().split('(')[0]);
			var catId = $(this).attr('class').split(' ')[1].split('cat-item-')[1];
*/
			
		});
		

	});
	
	$('.add').click(function(e) {
		if($(this).hasClass('hidden')){
			$(this).fadeIn(150);
			$('.addForm').fadeOut(180);
			$(this).removeClass('hidden');
				
		} else {
			$(this).fadeOut(150);
			$('.projListWrapper').addClass('shifted');
			$('.addForm').fadeIn(180);
			$(this).addClass('hidden');
			$('.projList').fadeIn(180);			
		}
		

	});
	
	$('.addForm .close').click(function(e) {
		$('.addForm').fadeOut(180);
		$('.add').fadeIn(180);
		$('.add').removeClass('hidden');
		$('.projListWrapper').removeClass('shifted');
	});	
	
	
	$('a.public').click(function(e) {
		var valid=true;
			$('.addToLab .required').each(function(index) {
				if($(this).val()!==''){	
					$(this).removeClass('notvalid');
				} else {
					$(this).addClass('notvalid');
					valid=false;
				}				
			});
			
			if(valid){
			$('.addToLab form').submit();
			} else {
			showValidationError();			
			}
		
	});
	
	
	function showValidationError(){
		$('.alert.red').text('Вы не заполнили обязательные поля. Проверьте пожалуйста все поля ещё раз.');
		$('.alert.red').fadeIn(150);
	}
	
});