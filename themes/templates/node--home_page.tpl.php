<!-- /white-stripe> -->
<!-- 
	<?php  print render(module_invoke( 'menu', 'block_view', 'menu-physicians-menu') ); ?>
 -->

<div class="yellow-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="header-bg clearfix">
						<div class="row">
							<div class="span12">
								<?php  print render(module_invoke( 'menu', 'block_view', 'menu-physicians-menu') ); ?>	
							</div>
						</div>
						<div class="row">
							<div id="header-bg-h1-resize" class="span7">
								<h1>
									Working for urology professionals.<br/>Dedicated to great outcomes.
								</h1>
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

<!-- Share module block (block--block-2.tpl.php) -->
<?php 
	$block = block_load('block', 2);
	$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
	print $output;
?>
<!-- /yellow-stripe -->
<!-- grey share -->
<!-- /grey share -->

<div id="grey-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div id="large-mol-resize" class="span6">
							<div class="large-molecule">
								<a href="/our-story/totalcare">
								<div class="large-molecule-copy">
									<div class="inner">
										<h1>Urologists call it top-to-bottom, worry-free service. We call it Total Care.</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<div class="icon icon-00"></div>
									</div>
								</div>
								</a>
							</div>
						</div>
						<div id="small-mol-resize" class="span6">
							<div id="small-mol-row" class="row">
								<div class="small-mol-resize-c span3">
									<a href="/lithotripsy/lithotripsy-overview">
										<div class="small-molecule mol-border-orange">
											<div class="inner">
												<h1>Lithotripsy</h1>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
								<div class="small-mol-resize-c span3">
									<a href="/laser-treatments/laser-treatment-overview">
										<div class="small-molecule mol-border-green">
											<div class="inner">
												<h1>Laser Treatments</h1>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
								<div class="small-mol-resize-c span3">
									<a href="/cryotherapy/cryotherapy-overview">
										<div class="small-molecule mol-border-blue">
											<div class="inner">
												<h1>Cryotherapy</h1>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
								<div class="small-mol-resize-c span3">
									<a href="/it-solutions/overview-it-solutions">
										<div class="small-molecule mol-border-purple">
											<div class="inner">
												<h1>Technology Solutions</h1>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
								<div class="small-mol-resize-c span3">
									<a href="/lab-solutions/laboratory-solutions-overview">
										<div class="small-molecule mol-border-yellow">
											<div class="inner">
												<h1>Laboratory Solutions</h1>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
								<div class="small-mol-resize-c span3">
									<a href="/equipment-services/equipment-services-overview">
										<div class="small-molecule mol-border-grey">
											<div class="inner">
												<h1>Equipment Services</h1>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /service-molecules container -->
		
		<div class="container">
			<div class="row news-molecules">
				<div class="span6">
					<div class="news-molecule mol-color-orangelight">
						<div class="inner clearfix">
							<a href="#">
								<div class="date">
									<div class="month">JAN</div>
									<div class="day">21</div>
									<div class="year">2012</div>
								</div>
								<h1>HealthTronics has joined Endo Health Solutions</h1>
							</a>
							<div class="more-link"><a href="/news/news-results/all">More News <div class="arrow"></div></a></div>
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="email-molecule mol-color-grey">
						<div class="inner clearfix">
							<img src="<?php print '/' . path_to_theme() . '/images/symbol_at.png'; ?>" class="at">
							<div class="content">
								<h1>Sign up to receive email alerts.</h1>
								<p>Your address will stay private. Unsubscribe any time.</p>
								<form class="form-inline">
									<input id="email-field-top" type="text" class="email-field" style="width: 310px;" placeholder="Enter Your email address"><button type="submit" class="submit-btn">submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /news-molecules -->
		
		
		<div class="container">
			<div class="row stats-events-molecules" >
				<div id="stats-mol-resize" class="span6">
					<div class="stats-molecule">
						<div class="header clearfix">
							<h1>Stats</h1>
							<div class="more-link"><a href="#">More Company Info <div class="arrow icon-06"></div></a></div>
						</div>
						<div id="carousel" class="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="stat">
										<h1 class="color-purple">5,000</h1>
										<p>Lithotripsy procedures conducted in 2011</p>
									</div>
								</div>
								<div class="item">
									<div class="stat">
										<div class="stat">
											<h1 class="color-orange">4,000</h1>
											<p>Lithotripsy procedures conducted in 2011</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="stat">
										<div class="stat">
											<h1 class="color-green">3,000</h1>
											<p>Lithotripsy procedures conducted in 2011</p>
										</div>
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#carousel" data-slide="prev"></a>
							<a class="right carousel-control" href="#carousel" data-slide="next"></a>
						</div>
					</div>
				</div>
				<div id="events-mol-resize" class="span6">
					<div class="events-molecule">
						<div class="header clearfix">
							<h1>Events</h1>
							<div class="more-link"><a href="/events/all">More Events <div class="arrow icon-06"></div></a></div>
						</div>
						<div class="event clearfix">
							<div class="date mol-color-orange">
								<div class="month">MAR</div>
								<div class="day">3</div>
							</div>
							<div class="content">
								<h1><a href="#">16th Annual Scottsdale Prostate Cancer Symposium</a></h1>
								<time>Mar 3-6</time>
								<p>JW Marriott Camelback Inn, Scottsdale, AZ</p>
							</div>
						</div>
						<div class="event clearfix">
							<div class="date mol-color-orangelight">
								<div class="month">MAR</div>
								<div class="day">4</div>
							</div>
							<div class="content">
								<h1><a href="#">Oklahoma State Urological Association</a></h1>
								<time>Mar 4-5</time>
								<p>Doubletree Warren Place, Tulsa, OK</p>
							</div>
						</div>
						
						<div class="event last clearfix">
							<div class="date mol-color-yellow">
								<div class="month">MAR</div>
								<div class="day">5</div>
							</div>
							<div class="content">
								<h1><a href="#">Utah Urological Society Annual CME-Accredited Symposium</a></h1>
								<time>Mar 5-6</time>
								<p>Utah Urological Society Annual CME-Accredited Symposium 2011</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /grey stripe container -->



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
			
			$(".large-molecule h1").dotdotdot({
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
				
				$("#email-field-top").css("width", 247);
				
				$("#email-mol-bottom-resize").removeClass("span5").removeClass("offset1").addClass("span6");
				$("#email-field-bottom").css("width", 247);
				
				
				// $("#large-mol-resize").removeClass("span6").addClass("span12");
				// $("#small-mol-resize").removeClass("span6").addClass("span12");
				// $("#stats-mol-resize").removeClass("span6").addClass("span12");
				// $("#events-mol-resize").removeClass("span6").addClass("span12");
				
				// $(".small-mol-resize-c").removeClass("span3").addClass("span6");
				
				// $("#email-field-top").css("width", 247);
				// $("#email-field-bottom").css("width", 247);
				
				// $("#email-mol-bottom-resize").removeClass("span5").removeClass("offset1").addClass("span6");
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
				
				$("#email-field-top").css("width", 310);
				
				$("#email-mol-bottom-resize").removeClass("span6").addClass("offset1").addClass("span5");
				$("#email-field-bottom").css("width", 285);
				
				// $("#large-mol-resize").removeClass("span12").addClass("span6");
				// $("#small-mol-resize").removeClass("span12").addClass("span6");
				// $("#stats-mol-resize").removeClass("span12").addClass("span6");
				// $("#events-mol-resize").removeClass("span12").addClass("span6");
				
				// $(".small-mol-resize-c").removeClass("span6").addClass("span3");
				
				// $("#email-field-top").css("width", 310);
				// $("#email-field-bottom").css("width", 285);
				
				// $("#email-mol-bottom-resize").removeClass("span6").addClass("offset1").addClass("span5");
			}
		}
	</script>
