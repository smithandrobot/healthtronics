<?php
	$most_recent_news_result = views_get_view_result('news_one_result','news_one_block');
	$most_recent_events_result = views_get_view_result('events_home','news_two_result');
	$upcoming_events = views_get_view_result('events_home_page_events_list', 'block');
	$i = 0;
	$class = array('date-color-orange', 'date-color-orangelight', 'date-color-yellow');
?>
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
												<p>The largest fleet in the U.S., backed by the best service in the business.</p>
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
												<p>Effective and accurate laser surgery for treating prostate enlargement.</p>
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
												<p>The innovative oncology solution urologists and interventional radiologists can agree on.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
								<div class="small-mol-resize-c span3">
									<a href="/it-solutions/overview-it-solutions">
										<div class="small-molecule mol-border-purple">
											<div class="inner">
												<h1>IT Solutions</h1>
												<p>Software built exclusively for the way urologists work.</p>
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
												<p>Uropathology expertise and business solutions for better outcomes.</p>
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
												<p>Worry-free equipment support, where and when you need it.</p>
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
				<?php print render(node_view( node_load($most_recent_news_result[0]->nid), 'homepage_molecule')); ?>
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
							<div class="more-link"><a href="/our-company/our-story/overview">More Company Info <div class="arrow icon-06"></div></a></div>
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
							<div class="more-link"><a href="/our-company/events/all">More Events <div class="arrow icon-06"></div></a></div>
						</div>
						<?php foreach($upcoming_events as $event):?>
							<?php $colorClass=$class[$i]?>
						<div class="event clearfix <?php print $colorClass; ?>">
							<?php print render(node_view( node_load($event->nid), 'list_view')); ?>
						</div>
							<?php ++$i; ?>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /grey stripe container -->
