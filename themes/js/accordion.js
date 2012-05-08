// get URL for Facilities accordion button
function fetchFacilitiesURL()
{
	window.location.href = "http://www.smithandrobot.com";
}		


// change accordion button style when expanded
$(".accordion-body").on("show", function(e){
	$(this).prev().find("a").toggleClass("accordion-heading-white-top");
})


// change accordion button style when collapsed
$(".accordion-body").on("hide", function(e){
	$(this).prev().find("a").toggleClass("accordion-heading-white-top");
})