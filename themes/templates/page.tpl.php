<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 *
 */

 /*
 * set this so that at the end of the 
 * the conditionals we know whether we should
 * render a deault view
 * we set it to true if a node type or home page is rendered that we know
 */ 
	$contentRendered = FALSE;
	
	// set this so we can check later how to render
	$view = views_get_page_view();

?>

<!-- Header -->
<div id="white-stripe">
	<div class="container">
		<div class="row">
	   		<div class="span12 page-top">
	   	   		<a href="/"><img class="logo" src="<?php print '/' . path_to_theme() . '/images/logo_ht.png'; ?>"></a>
	   	   		<div id="nav-primary-move" class="nav-primary">
	   	   	  		<div class="accordion-menu-btn visible-phone">
	   	   	  	   		<a href="#" data-toggle="collapse" data-target="#accordion2">menu</a>
	   	   	  		</div>
	   	   	  		<div class="hidden-phone">
	   	   	  			<div class="contact">
	   	   	  				<a href="/contact">contact us</a>
	   	   	  			</div>
	   	   	  			<div class="search">
	   	   	  	   			<div class="input-append">
								<?php print render($page['search_bar']); ?>
	   	   	  	   			</div>
	   	   	  			</div>
				   		<?php print render($page['main_nav']); ?>
	   	   	  		</div>
	   	   	  	</div>
	   	   	</div>
		</div>
	</div>
</div>
<!-- /Header -->


<!-- Accordion for mobile menu -->
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
<!-- /Accordion for mobile menu -->

<!-- Content Inside Orange Area + Share Module -->
<?php if ($page['header']): ?>
<div class="yellow-stripe">
	<div class="inner">
		<div class="container">
			<div class="row header">
				<div class="span12">
			   		<div class="sub-page-nav hidden-phone">
			   			<?php print render($page['sub_nav']); ?>
			   		</div>
			   		<div class="sub-page-header">
			   			<?php print render($page['header']); ?>
			   		</div>
			   		<div class="sub-page share">
			   			<a href="javascript: return false;" data-toggle="collapse" data-target="#share">
			   				<div class="image"></div>
			   			</a>
			   		</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php print render($page['share_module']); ?>
<?php endif?>
<!-- End Content Inside Orange Area + Share Module -->

<!--  Subpage Nodes-->
<?php if(isset($node)):?>
<?php if($node->type == 'sub_page' || $node->type == 'bio_listing'): ?>
	<?php $contentRendered = TRUE; ?>
	<!-- <?php print $node->nid; ?> -->
<div id="grey-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span3">
							<div id="sidebar-left">
								<?php if( $page['sidebar_left'] ){
									print render($page['sidebar_left']);
									}
								?>
								<?php if( $page['pull_quote']): ?>
								<div id="sub-page-pull-quote">
									<?php print render($page['pull_quote']);?>
								</div>
								<?php endif ?>
							</div>
						</div>
						<div class="span6">
							<div id="subpage-body-copy">
								<?php print render($page['content']); ?>
							</div>
						</div>
						<div class="span3">
							<div id="subpage-right-sidebar">
								<?php print render($page['sidebar_right']); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif ?>
<?php endif?>

<!-- Event Nodes -->
<?php if(isset($node)):?>
<?php if($node->type == 'event' || $node->type == 'news'): ?>
	<?php $contentRendered = TRUE; ?>
<div id="grey-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<?php print render($page['content']); ?>
						<div class="span3">
							<div id="subpage-right-sidebar" class="">
								<?php print render($page['sidebar_right']); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif ?>
<?php endif ?>

<!--  Find a Physician Node-->
<?php if(isset($node)):?>
	<?php if($node->type == 'find_a_physician'): ?>
		<?php $contentRendered = TRUE; ?>
   		<div id="grey-stripe">
   			<div class="inner">
   				<div class="container">
   					<div class="row">
   						<div class="span12">
   							<div class="row">
   								<?php if($page['sidebar_left']):?>
   								<div class="span3">
   									<div id="sidebar-left">
   										<?php print render($page['sidebar_left']);?>
   									</div>
   								</div>
   								<?php endif ?>
   								<div class="span9">
   									<div id="subpage-body-copy">
   										<?php print render($page['content']); ?>
   									</div>
   								</div>
   							</div>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
	<?php endif?>
<?php endif ?>

<!-- Home page-->
<?php if($is_front): ?>
	<?php $contentRendered = TRUE; ?>
	<?php print render($page['content']); ?>
<?php  endif ?>

<!-- default node render -->
<?php if(isset($node)):?>
	<?php if(!$contentRendered): ?>
	<div id="grey-stripe">
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span3">
								<div id="sidebar-left">
								</div>
							</div>
							<div class="span6">
								<div id="subpage-body-copy">
									<?php print render($page['content']); ?>
								</div>
							</div>
							<div class="span3">
								<div id="subpage-right-sidebar" class="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif?>
<?php endif?>


<!-- news view render -->
<?php if(!$contentRendered): ?>
	<?php if($view && $view->name=='news_listing') : ?>
		<?php $contentRendered = TRUE; ?>
			<div id="grey-stripe">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="news-header-resize span12">
								<?php print render($page['content']); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
	<?php endif?>
<?php endif?>

<!-- Events view renderer -->
<?php if(!$contentRendered): ?>
<?php if($view && $view->name=='recent_events') : ?>
	<?php $contentRendered = TRUE; ?>
		<div id="grey-stripe">
			<div class="inner">
				<div class="container">
					<?php print render($page['content']); ?>
				</div>
			</div>
		</div>
	<?php endif ?>
<?php endif?>

<!-- Resources subpage view renderer -->
<?php if(!$contentRendered): ?>
<?php if($view && $view->name == 'resources_physicians_section') : ?>
	<?php $contentRendered = TRUE; ?>
<div id="grey-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span3">
							<div id="sidebar-left">
								<?php if( $page['sidebar_left'] ){
									print render($page['sidebar_left']);
									}
								?>
							</div>
						</div>
						<div class="span9">
							<?php print render($page['content']); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php endif ?>
<?php endif?>


<!-- Default Render -->
<?php if(!$contentRendered): ?>
	<?php $contentRendered = TRUE; ?>
	<div id="grey-stripe">
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="news-header-resize span12">
						<?php print render($page['content']); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif?>

<div id="footer">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
				<div class="row">
				<div class="span6">
					<div class="row footer-links">
						<div class="span2 clearfix">
							<p class="desc">Physicians</p>
							<?php print render($page['footer_col1']); ?>
						</div>
						<div class="span2 clearfix">
							<p class="desc">Patients</p>
							<?php print render($page['footer_col2']); ?>
						</div>
						<div class="span2 clearfix">
							<p class="desc">Our Company</p>
							<?php print render($page['footer_col3']); ?>
						</div>
					</div>
				</div>
				<div id="email-mol-bottom-resize" class="span5 offset1">
					<div class="email-molecule">
						<div class="inner clearfix">
							<img src="<?php print '/' . path_to_theme() . '/images/symbol_footer_at.png'?>" class="at">
							<div class="content">
								<h1>Sign up to receive email alerts.</h1>
								<p>Your address will stay private. Unsubscribe any time.</p>
							</div>
							<form class="form-inline">
								<input id="email-field-bottom" type="text" class="email-field" style="width: 285px;" placeholder="Enter Your email address"><button type="submit" class="submit-btn">submit</button>
							</form>
						</div>
						<div class="logos clearfix">
							<a href="http://www.endo.com/"><img src="<?php print '/' . path_to_theme() . '/images/logo_bottom_endo.png'; ?>" class="endo"></a>
							<a href="http://www.visitams.com/"><img src="<?php print '/' . path_to_theme() . '/images/logo_bottom_ams.png'; ?>" class="ams"></a>
							<a href="http://www.qualitestrx.com/"><img src="<?php print '/' . path_to_theme() . '/images/logo_bottom_qualitest.png'; ?>" class="qualitest"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span12 hr"></div>
			</div>
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span4 legal">© <?php print date("Y");?> HealthTronics, Inc. All Rights Reserved.</div>
						<div class="span8 bottom-links">
							<!-- <a href="#">Sitemap</a> -->
							<a href="/sites/default/files/resources/complianceplan.pdf">Corporate Compliance</a>
							<a href="/code-of-conduct">Code of Conduct</a>
							<a href="/privacy-policy">Privacy Policy</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	// DOCUMENT READY
	// ----------------------------------------------------------
	$(document).ready(function()
	{
		// ellipsis
		// ----------------------------------
		$(".date h1").dotdotdot({
			wrap: 'word'
		});
		
		$(".small-molecule h1").dotdotdot({
			wrap: 'word'
		});
		
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
		
		
		// trigger dotdotdot
		// ----------------------------------
		$(".small-molecule h1").trigger("update");
		$(".small-molecule p").trigger("update");
		$(".large-molecule h1").trigger("update");
		$(".large-molecule p").trigger("update");
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
			
			// trigger dotdotdot
			// ----------------------------------
			$(".small-molecule h1").trigger("update");
			$(".small-molecule p").trigger("update");
			$(".large-molecule h1").trigger("update");
			$(".large-molecule p").trigger("update");
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
			
			// trigger dotdotdot
			// ----------------------------------
			$(".small-molecule h1").trigger("update");
			$(".small-molecule p").trigger("update");
			$(".large-molecule h1").trigger("update");
			$(".large-molecule p").trigger("update");
		}
		
		
		// If there isn't a 'Previous' link,
		// push the 'Next' link to the right
		// ----------------------------------
		if(!$(".news-molecules-nav li").hasClass("prev"))
		{
			$(".news-molecules-nav li").css("width", "100%");
		}
	}
</script>
		
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4faab0d16ed7d203"></script>