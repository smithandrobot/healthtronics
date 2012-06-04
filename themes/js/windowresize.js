function respond()
{
	// console.log($(window).width());
	
	
	if($(window).width() <= 979)
	{
		// console.log("resize for <= 979");
		
		$(".contact a").css("width", 100);
		$(".search-field").css("width", 209);
		
		$("#header-bg-h1-resize").removeClass("span7").addClass("span12");
		$("#header-bg-p-resize").removeClass("span5").addClass("span12");
		
		$("#large-mol-resize").removeClass("span6").addClass("span12");
		$("#small-mol-resize").removeClass("span6").addClass("span12");
		$("#stats-mol-resize").removeClass("span6").addClass("span12");
		$("#events-mol-resize").removeClass("span6").addClass("span12");
		
		$(".small-mol-resize-c").removeClass("span3").addClass("span6");
		$(".small-mol-resize-d").removeClass("span3").addClass("span4");
		
		
		$("#email-mol-bottom-resize").removeClass("span5").removeClass("offset1").addClass("span6");
		$("#email-field-bottom").css("width", 247);
		
		// subpage
		// ----------------------------------
		// $("#subpage-span6-resize").removeClass("span6").addClass("span9");
		$(".subpage-span3-resize").removeClass("span3").addClass("span12");
		
		
		// trigger dotdotdot
		// ----------------------------------
		$(".small-molecule h1").trigger("update");
		$(".small-molecule p").trigger("update");
		$(".large-molecule h1").trigger("update");
		$(".large-molecule p").trigger("update");
		$(".events-molecule .event-large h1").trigger("update");
		$(".events-molecule .event-large p").trigger("update");
	}
	
	
	if($(window).width() >= 980)
	{
		// console.log("resize for >= 980");
		
		$(".contact a").css("width", 120);
		$(".search-field").css("width", 269);
		
		$("#header-bg-h1-resize").removeClass("span12").addClass("span7");
		$("#header-bg-p-resize").removeClass("span12").addClass("span5");
		
		$("#large-mol-resize").removeClass("span12").addClass("span6");
		$("#small-mol-resize").removeClass("span12").addClass("span6");
		$("#stats-mol-resize").removeClass("span12").addClass("span6");
		$("#events-mol-resize").removeClass("span12").addClass("span6");
		
		$(".small-mol-resize-c").removeClass("span6").addClass("span3");
		$(".small-mol-resize-d").removeClass("span4").addClass("span3");
		
		
		$("#email-mol-bottom-resize").removeClass("span6").addClass("offset1").addClass("span5");
		$("#email-field-bottom").css("width", 285);
		
		// subpage
		// ----------------------------------
		// $("#subpage-span6-resize").removeClass("span9").addClass("span6");
		$(".subpage-span3-resize").removeClass("span12").addClass("span3");
		
		// trigger dotdotdot
		// ----------------------------------
		$(".small-molecule h1").trigger("update");
		$(".small-molecule p").trigger("update");
		$(".large-molecule h1").trigger("update");
		$(".large-molecule p").trigger("update");
		$(".events-molecule .event-large h1").trigger("update");
		$(".events-molecule .event-large p").trigger("update");
	}
	
	
	// If there isn't a 'Previous' link,
	// push the 'Next' link to the right
	// ----------------------------------
	if(!$(".news-molecules-nav li").hasClass("prev"))
	{
		$(".news-molecules-nav li").css("width", "100%");
	}
}