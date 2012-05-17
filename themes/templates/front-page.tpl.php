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

<!-- ACCORDION -->
<div class="accordion collapse visible-phone" id="accordion2">
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">Physicians</a>
		</div>
		<div id="collapse1" class="accordion-body collapse" style="height: 0px;">
			<div class="accordion-inner">
				<ul class="accordion-menu-ul">
					<li><a href="#">Lithotripsy</a></li>
					<li><a href="#">Laser Treatment</a></li>
					<li><a href="#">Cryotherapy</a></li>
					<li><a href="#">IT Solutions</a></li>
					<li><a href="#">Laboratory Solutions</a></li>
					<li><a href="#">Equipment Services</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">Patients</a>
		</div>
		<div id="collapse2" class="accordion-body collapse" style="height: 0px;">
			<div class="accordion-inner">
				<ul class="accordion-menu-ul">
					<li><a href="#">What We Do</a></li>
					<li><a href="#">For Cancer</a></li>
					<li><a href="#">For Stones</a></li>
					<li><a href="#">For Enlarged Prostate</a></li>
					<li><a href="#">Find an M.D.</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3" onclick="fetchFacilitiesURL()">Facilities</a>
		</div>
		<div id="collapse3" class="accordion-body collapse" style="height: 0px;"></div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">Our Company</a>
		</div>
		<div id="collapse4" class="accordion-body collapse" style="height: 0px;">
			<div class="accordion-inner">
				<ul class="accordion-menu-ul">
					<li><a href="#">Overview</a></li>
					<li><a href="#">TotalCare&trade;</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Events</a></li>
					<li><a href="#">Careers</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- /ACCORDION -->

<!-- submenu	 -->
<div class="yellow-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="header-bg clearfix">
						<div class="row">
							<div class="span12">
								<ul class="nav nav-secondary clearfix">
									<li class="first leaf"><a href="/lithotripsy" title="Lithotripsy">Lithotripsy</a></li>
									<li class="leaf"><a href="#" title="Laser Treatments">Laser Treatments</a></li>
									<li class="leaf"><a href="#" title="Cryotherapy">Cryotherapy</a></li>
									<li class="leaf"><a href="#" title="IT Solutions">IT Solutions</a></li>
									<li class="leaf"><a href="#" title="Lab Solutions">Lab Solutions</a></li>
									<li class="last leaf"><a href="#" title="Equipment Services">Equipment Services</a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div id="header-bg-h1-resize" class="span7">
								<div>
									<h1>
										Working for urology professionals.<br/>Dedicated to great outcomes.
									</h1>
								</div>
							</div>
							<div id="header-bg-p-resize" class="span5">
								<p>
									HealthTronics is the urology solutions company built by urologists. Like you, we’re working for better economics, better patient care and better outcomes. <a href="#">More about our company.</a>
								</p>
								<div class="share">
									<a href="javascript: return false;" data-toggle="collapse" data-target="#share"><div class="image"></div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /submenu -->

<!-- grey share -->
<div id="share" class="share-molecule collapse">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="share-headline">
						<img src="../images/arrow_share.png"> Share this page
					</div>
					<div class="row">
						<div class="span4">
							<label>Email to humans.</label>
							<input type="text" placeholder="To (email address)">
							<input type="text" placeholder="Sender's Email">						
						</div>
						<div class="span5">
							<div class="">
								<label>Message &amp; Preview:</label>
								<textarea>ivy@smithandrobot.com has shared a link with you: Hello, Here is the resources I mentioned at our last meeting. HealthTronics Technology Resources Library</textarea>
								<a class="share-email-btn">submit</a>
							</div>
						</div>
						<div class="span2">
							<!-- AddThis Button BEGIN -->
							<div class="addthis_toolbox addthis_default_style ">
							<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
							<a class="addthis_button_tweet"></a>
							<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
							<a class="addthis_counter addthis_pill_style"></a>
							</div>
							<!-- AddThis Button END -->
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




<br/>
<br/>
<br/>

<!--
<?php print '<br />This is sidebar left <br />' . render($page['sidebar_left']); ?>
<?php print '<br />This is sidebar right <br />' . render($page['sidebar_right']); ?>
    
<?php print '<br />this is content <br />' . render($page['content']) . '<br />'; ?>
<?php print '<br />this is the footer col 1<br />' .render($page['footer_col1']); ?>
<?php print '<br />this is the footer col 2<br />' .render($page['footer_col2']); ?>
<?php print '<br />this is the footer col 3<br />' .render($page['footer_col3']); ?>
<?php print '<br />this is the footer col 4<br />' .render($page['footer_col4']); ?>
-->


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
						
			$(".contact a").css("width", 100);
			$(".search-field").css("width", 209);
			
			$("#header-bg-h1-resize").removeClass("span7").addClass("span12");
			$("#header-bg-p-resize").removeClass("span5").addClass("span12");
			
			
			$("#filter-header-resize").removeClass("span9").addClass("span8");
			$(".small-mol-resize-c").removeClass("span3").addClass("span4");
			
			$("#email-field-bottom").css("width", 247);
			$("#email-mol-bottom-resize").removeClass("span5").removeClass("offset1").addClass("span6");
		}
		
		
		if($(window).width() >= 980)
		{
			console.log("resize for >= 980");
			
			$(".contact a").css("width", 120);
			$(".search-field").css("width", 269);
			
			$("#header-bg-h1-resize").removeClass("span12").addClass("span7");
			$("#header-bg-p-resize").removeClass("span12").addClass("span5");
			
			
			$("#filter-header-resize").removeClass("span8").addClass("span9");
			$(".small-mol-resize-c").removeClass("span4").addClass("span3");
			
			$("#email-field-bottom").css("width", 285);
			$("#email-mol-bottom-resize").removeClass("span6").addClass("offset1").addClass("span5");
		}
	}
</script>