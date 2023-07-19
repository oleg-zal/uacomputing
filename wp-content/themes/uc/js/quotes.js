$(document).ready(function(e) {
	
		$('.content strong').each(function(index, element) {
			$(element).clone().insertAfter($(element)).addClass('leftQuote').attr('id','quote'+index);
			$(element).parent().before($(element).next());
/*			$(element).next().remove();*/
		});
		
		/*$('.content p').each(function(index, element) {
			$(this).html('<div class="pnum">'+index+'</div>'+$(this).html());
		});*/
		
		$('#page185 #glushkov').insertBefore('#page185 #glushkovp');
		$('#page185 #amosov').insertBefore('#page185 #amosovp');
		$('#page185 #amosov').show();
		$('#page185 #glushkov').show();
		
		$('.images a').each(function(index, element) {			
			var pNumber = $(this).find('img').attr('title').split('p')[1];
			$(this).appendTo($('.content p').eq(parseFloat(pNumber-1)));
			$(this).find('img').after('<span class="subscription" id="'+$(this).find('img').attr('title')+'">'+$(this).find("img").attr('alt')+'</span><div class="clear"></div>');
		});
});