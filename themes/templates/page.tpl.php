<!-- 
<p>Nav</p>
<?php print render($page['main_nav']); ?>
<?php print '<br /> This is the utility bar.<br />' . render($page['utility_bar']); ?>
-->

<?php
	// var_dump($page['main_nav']['system_main-menu']);
	// var_dump($page['main_nav']['system_main-menu']);
	// var_dump($page['main_nav']['system_main-menu'][399]['#title']);
	// var_dump($page['main_nav']['system_main-menu'][399]['#href']);
	// var_dump($page['main_nav']['system_main-menu'][218]);
	// var_dump($page['main_nav']['system_main-menu'][400]);
	// print $page['main_nav']['system_main-menu'][399]['#theme'];
	
?>

<div class="container" style="background-color: #FFFFFF; width: 100%;">
	<div class="container">
		<div class="row-fluid">
			<div class="span12 page-top">
				<a href="#"><img class="logo" src="/sites/all/themes/healthtronicsv2/images/logo_ht.png"></a>
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-primary">
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
				</a>
				<div id="nav-primary-move" class="nav-primary">
					<div class="contact">
						<a href="<?php print $page['main_nav']['system_main-menu'][497]['#href']; ?>"><?php print $page['main_nav']['system_main-menu'][497]['#title']; ?></a>
					</div>
					<div class="search">
						<div class="input-append">
							<input type="search" placeholder="Keyword Search" class="search-field"><button class="search-btn" type="button"><img src="/sites/all/themes/healthtronicsv2/images/search.png"></button>
						</div>
					</div>
					<ul class="nav nav-pills">
						<li class="active"><a href="<?php print $page['main_nav']['system_main-menu'][399]['#href']; ?>"><?php print $page['main_nav']['system_main-menu'][399]['#title']; ?></a></li>
						<li><a href="<?php print $page['main_nav']['system_main-menu'][218]['#href']; ?>"><?php print $page['main_nav']['system_main-menu'][218]['#title']; ?></a></li>
						<li><a href="<?php print $page['main_nav']['system_main-menu'][400]['#href']; ?>"><?php print $page['main_nav']['system_main-menu'][400]['#title']; ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /white-stripe> -->

<div id="yellow-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="header-bg clearfix">
						<div class="row">
							<div class="span12">
								<ul class="nav nav-secondary clearfix">
									<li class="active"><a href="#">Services</a></li>
									<li><a href="#">Resources</a></li>
									<li><a href="#">Events</a></li>
									<li><a href="#">Careers</a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span6">
								<h1 id="header-resize">Working for Urologists.<br/>Committed to patients.</h1>
							</div>
							<div class="span6">
								<p id="header-p-resize">Meet the company built by Urologists. We’re focused on two things, better economics for Urologists and better outcomes for patients. <a href="#">See how we work.</a></p>
								<div class="share">
									<a href="#" data-toggle="collapse" data-target="#share"><div class="image"></div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- grey share -->
		<div id="share" class="share-molecule collapse">
			<div class="container stripe">
				<div class="container">
					<div class="row">
						<div class="span12">
							<div class="share-headline">
								<div class="inner">
									<img src="../images/arrow_share.png"> Share this page
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
										<a href="#" data-toggle="collapse" data-target="#share"><img src="../images/close_btn.png"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /grey share -->
	</div>
</div>
<!-- /yellow-stripe -->
<br/>
<br/>
<br/>

<?php print '<br />This is sidebar left <br />' . render($page['sidebar_left']); ?>
<?php print '<br />This is sidebar right <br />' . render($page['sidebar_right']); ?>
    
<?php print '<br />this is content <br />' . render($page['content']) . '<br />'; ?>
<?php print '<br />this is the footer col 1<br />' .render($page['footer_col1']); ?>
<?php print '<br />this is the footer col 2<br />' .render($page['footer_col2']); ?>
<?php print '<br />this is the footer col 3<br />' .render($page['footer_col3']); ?>
<?php print '<br />this is the footer col 4<br />' .render($page['footer_col4']); ?>


<script>
	// DOCUMENT READY
	// ----------------------------------------------------------
	$(document).ready(function()
	{
		// ellipsis
		// ----------------------------------
    	$(".small-molecule p").dotdotdot({
			wrap: 'word'
		});
		
		$(".large-molecule p").dotdotdot({
			wrap: 'word'
		});
		
		
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