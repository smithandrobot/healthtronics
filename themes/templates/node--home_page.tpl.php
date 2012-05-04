<!-- /white-stripe> -->

<div class="yellow-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="header-bg clearfix">
						<div class="row">
							<div class="span6">
								<h1 id="header-resize">Working for Urologists.<br/>Committed to patients.</h1>
							</div>
							<div class="span6">
								<p id="header-p-resize">Meet the company built by Urologists. We’re focused on two things, better economics for Urologists and better outcomes for patients. <a href="#">See how we work.</a></p>
								<div class="share">
									<a href="javascript:;" data-toggle="collapse" data-target="#share"><div class="image"></div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /yellow-stripe -->

<!-- grey share -->
<div id="share" class="share-molecule collapse">
	<div class="container stripe">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="share-headline">
						<div class="inner">
							<img src="/sites/all/themes/healthtronicsv2/images/arrow_share.png"> Share this page
						</div>
					</div>
					<div class="row">
						<div class="span4">
							<div class="inner">
								<label>Email to humans.</label>
								<input type="text" placeholder="To (email address)">
								<input type="text" placeholder="Sender's Email">
							</div>
						</div>
						<div class="span5">
							<div class="inner clearfix">
								<label>Message &amp; Preview:</label>
								<textarea>ivy@smithandrobot.com has shared a link with you: Hello, Here is the resources I mentioned at our last meeting. HealthTronics Technology Resources Library</textarea>
								<button class="share-email-btn">submit</button>
							</div>
						</div>
						<div class="span2">
							<div class="inner">
								share links go here
							</div>
						</div>
						<div class="span1">
							<div class="close-btn">
								<a href="#" data-toggle="collapse" data-target="#share"><img src="/sites/all/themes/healthtronicsv2/images/close_btn.png"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /grey share -->


<script>
	// DOCUMENT READY
	// ----------------------------------------------------------
	$(document).ready(function()
	{
		// ellipsis
		// ----------------------------------
		//     	$(".small-molecule p").dotdotdot({
		// 	wrap: 'word'
		// });
		// 
		// $(".large-molecule p").dotdotdot({
		// 	wrap: 'word'
		// });
		
		
		// carousel
		// ----------------------------------
		$('.carousel').carousel();
		
		
		// respond
		// ----------------------------------
		respond();
	});
	
	
	// WINDOW RESIZE
	// ----------------------------------------------------------
	$(window).resize(function()
	{
		respond();
	});
	
	
	function respond()
	{
		console.log($(window).width());
		
		if($(window).width() <= 979)
		{
			console.log("resize for <= 979");
			$("nav-primary-move").css("left", 400);
			
			$("#header-resize").css("font-size", 36);
			$("#header-resize").css("line-height", 1.2);
			$("#header-p-resize").css("font-size", 16);
			$("#header-p-resize").css("width", 290);
			
			$("#large-mol-resize").removeClass("span6").addClass("span12");
			$("#small-mol-resize").removeClass("span6").addClass("span12");
			$("#stats-mol-resize").removeClass("span6").addClass("span12");
			$("#events-mol-resize").removeClass("span6").addClass("span12");
			
			$(".small-mol-resize-c").removeClass("span3").addClass("span6");
			
			$("#email-field-top").css("width", 247);
			$("#email-field-bottom").css("width", 247);
			
			$("#email-mol-bottom-resize").removeClass("span5").removeClass("offset1").addClass("span6");
		}
		
		
		if($(window).width() >= 980)
		{
			console.log("resize for >= 980");
			
			$("#header-resize").css("font-size", 46);
			$("#header-resize").css("line-height", 1.1);
			$("#header-p-resize").css("font-size", 19);
			$("#header-p-resize").css("width", 330);
			
			$("#large-mol-resize").removeClass("span12").addClass("span6");
			$("#small-mol-resize").removeClass("span12").addClass("span6");
			$("#stats-mol-resize").removeClass("span12").addClass("span6");
			$("#events-mol-resize").removeClass("span12").addClass("span6");
			
			$(".small-mol-resize-c").removeClass("span6").addClass("span3");
			
			$("#email-field-top").css("width", 310);
			$("#email-field-bottom").css("width", 285);
			
			$("#email-mol-bottom-resize").removeClass("span6").addClass("offset1").addClass("span5");
		}
	}
</script>