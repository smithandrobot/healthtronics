<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
	$most_recent_news_result = views_get_view_result('news_one_result','news_one_block');
	$most_recent_events_result = views_get_view_result('events_home','news_two_result');
	$upcoming_events = views_get_view_result('events_home_page_events_list', 'block');
	$i = 0;
	$class = array('date-color-orange', 'date-color-orangelight', 'date-color-yellow');
	$large_molecule = $node->field_hero_banner['und'][0]['node'];
	$info_graphics = get_weighted_nodes($node->field_info_graphics['und']);
?>
<?php if($teaser): ?>
<div class="span3 small-mol-resize-c">
	<a href="/<?php print drupal_lookup_path('alias','node/'.$node->nid); ?>">
		<div class="small-molecule mol-border-yellow">
			<div class="inner">
				<h1><?php print $node->title; ?></h1>
				<p><?php print $node->field_sub_page_summary_title['und'][0]["value"]; ?></p>
				<div class="arrow"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>

<?php if ($view_mode == 'full'): ?>
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
									<?php print strip_tags($node->body['und'][0]['summary'], array('<br />')); ?>
									<!-- Working for urology professionals.<br/>Dedicated to great outcomes. -->
								</h1>
							</div>
							<div id="header-bg-p-resize" class="span5">
								<?php print $node->body['und'][0]['value']; ?>
								<div class="share">
									<a href="javascript: ;" data-toggle="collapse" data-target="#share"><div class="image"></div></a>
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

<!-- Share module block (block--block-2.tpl.php) -->
<?php 
	$block = block_load('block', 2);
	$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
	print $output;
?>

<!--[if lte IE 7]>
<style>
.stats-molecule .header .more-link .arrow, .events-molecule .header .more-link .arrow
{
	display: inline;
}
</style>
<![endif]-->

<div id="grey-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row ie-margin">
						
						<!-- Start Large Molecule -->
						<?php print  render( node_view( $large_molecule, 'teaser') ); ?> 
						<!-- End Large Molecule -->
						
						<div id="small-mol-resize" class="span6">
							<div id="small-mol-row" class="row">
								<div class="small-mol-resize-c span3">
									<a href="physicians/lithotripsy/lithotripsy-services-and-solutions">
										<div class="small-molecule mol-border-orange large-font">
											<div class="inner">
												<h1>Lithotripsy</h1>
												<p>The largest fleet in the U.S., backed by the best service in the business.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
								<div class="small-mol-resize-c span3">
									<a href="/physicians/laser-treatments/laser-treatment-services-and-solutions">
										<div class="small-molecule mol-border-green large-font">
											<div class="inner">
												<h1>Laser Treatments</h1>
												<p>Effective and accurate laser surgery for treating prostate enlargement.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
								<div class="small-mol-resize-c span3">
									<a href="/physicians/cryotherapy/cryotherapy-services-and-solutions">
										<div class="small-molecule mol-border-blue large-font">
											<div class="inner">
												<h1>Cryotherapy</h1>
												<p>The innovative oncology solution urologists and interventional radiologists can agree on.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
								<div class="small-mol-resize-c span3">
									<a href="/physicians/it-solutions/information-technology-solutions-urologists">
										<div class="small-molecule mol-border-purple large-font">
											<div class="inner">
												<h1>IT Solutions</h1>
												<p>Software built exclusively for the way urologists work.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
								<div class="small-mol-resize-c span3">
									<a href="/physicians/lab-solutions/laboratory-solutions-overview">
										<div class="small-molecule mol-border-yellow large-font">
											<div class="inner">
												<h1>Laboratory Solutions</h1>
												<p>Uropathology expertise and business solutions for better outcomes.</p>
												<div class="icon icon-00"></div>
											</div>
										</div>
									</a>
								</div>
								<div class="small-mol-resize-c span3">
									<a href="/physicians/equipment-services/equipment-services-overview">
										<div class="small-molecule mol-border-grey large-font">
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
								<!-- 
								<h1>Sign up to receive email alerts.</h1>
								<p>Your address will stay private. Unsubscribe any time.</p>
								<form class="form-inline">
									<input id="email-field-top" type="text" class="email-field" value="Enter Your email address" onblur="if (this.value == '') {this.value = 'Enter Your email address';}" onfocus="if (this.value == 'Enter Your email address') {this.value = '';}"><button type="submit" class="submit-btn">submit</button>
								-->
								<h1 class="email-header">Sign up to receive email alerts.</h1>
								<p class="email-details">Your address will stay private. Unsubscribe any time.</p>
								<form id="email-form-homepage" class="form-inline" action="http://healthtronicsemail.createsend.com/t/j/s/eujkk/">
									<input id="email-field-top" 
									name="cm-eujkk-eujkk" 
									type="text" 
									class="email-field" 
									value="Enter Your email address"><button type="submit" id="email-top-btn" class="submit-btn">submit</button>
								</form>
								<script type="text/javascript" charset="utf-8">
									var cHomePage=new CMonitorForm('#email-form-homepage', '#email-top-btn', '#email-field-top', '.email-header', '.email-details');
								</script>
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
							<div class="more-link"><a href="/our-company/our-story/our-story">More Company Info <div class="arrow icon-06"></div></a></div>
						</div>
						
						<?php if(count($node->field_info_graphics) > 0): ?>
						<!-- Carousel -->
						<div id="statCarousel" class="carousel slide">
					   		<div class="carousel-inner">
								<?php
								$c = 0;
								foreach($info_graphics as $info_graphic)
								{
									if($c == 0)
									{
										// print first item as active
										print render( node_view( node_load($info_graphic->nid), 'first-teaser') );
									}
									else
									{
										// print > 1 items as inactive
										print render( node_view( node_load($info_graphic->nid), 'teaser') );
									}
									$c++;
								}
								?>
					   		</div>
					   		<a class="left carousel-control" href="#statCarousel" data-slide="prev"></a>
					   		<a class="right carousel-control" href="#statCarousel" data-slide="next"></a>
						</div>
						<!-- /Carousel -->
						<?php endif ?>
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
<?php endif ?>
