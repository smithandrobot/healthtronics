
// Modal window
// ----------------------------------------------------------

$(window).resize(function()
{
	if($(window).width() >= 768)
	{
		var modal = $(".modal");
		modal.css('margin-top', (modal.outerHeight() / 2) * -1).css('margin-left', (modal.outerWidth() / 2) * -1);
	}

	if($(window).width() < 768)
	{
		var modal = $(".modal");
		modal.css('margin-top', 0).css('margin-left', 0);
	}
});

$('.modal').on('show', function(e) {
	
	$("#videoModal").fitVids();
	var modal = $(this);
	
	if($(window).width() >= 768)
	{
    	modal.css('margin-top', (modal.outerHeight() / 2) * -1).css('margin-left', (modal.outerWidth() / 2) * -1);
    	return this;
	}
	
	if($(window).width() < 768)
	{
    	modal.css('margin-top', 0).css('margin-left', 0);
    	return this;
	}
});
