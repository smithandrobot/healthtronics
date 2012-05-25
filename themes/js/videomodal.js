
// Modal window
// ----------------------------------------------------------

$(document).ready(function()
{

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
	
	$(".video_open").click(function()
	{
	    var vid_link = $(this).attr("data-video").substr(16);
	    var embed = '<iframe width="794" height="404" src="http://www.youtube.com/embed/' + vid_link + '?rel=0" frameborder="0" allowfullscreen></iframe>';
		var vid_data = "http://gdata.youtube.com/feeds/api/videos/" + vid_link;
	    $(".modal-body").empty();
	    $(embed).appendTo(".modal-body");
				
	    var modal = $("#videoModal");
	    
	    modal.fitVids();
	
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
});