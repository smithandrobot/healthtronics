<div id="white-stripe" class="container">
	<div class="container">
		<div class="row">
			<div class="span12 page-top">
				<a href="/"><img class="logo" src="<?php print '/' . path_to_theme() . '/images/logo_ht.png'; ?>"></a>
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-primary">
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
				</a>
				<div id="nav-primary-move" class="nav-primary">
					<div class="contact">
						<a href="#">contact us</a>
					</div>
					<div class="search">
						<div class="input-append">
							<input type="search" placeholder="Keyword Search" class="search-field"><button class="search-btn" type="button"><img src="<?php print '/' . path_to_theme() . '/images/search.png'; ?>"></button>
						</div>
					</div>
					<?php 
					if($page['main_nav'])
					{
						print render($page['main_nav']);
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if ($page['header']): ?>
<div class="yellow-stripe">
	<div class="inner">
		<div class="container">
			<div class="row header">
				<div class="span12">
			   		<div class="sub-page-nav">
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
<!-- if Right and Left side bar exsits -->

<?php if($page['sidebar_left'] && $page['sidebar_right']): ?>
<div id="grey-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div id="sidebar-left" class="span3">
							<?php if( $page['sidebar_left'] ){
								print render($page['sidebar_left']);
								}
							?>
							<div id="sub-page-pull-quote">
							<?php if( $page['pull_quote'] ){
								print render($page['pull_quote']);
								}
							?>
							</div>
						</div>
						<div id="subpage-body-copy" class="span6">
							<?php print render($page['content']); ?>
						</div>
						<div id="subpage-right-sidebar" class="span3">
							<?php print render($page['sidebar_right']); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif ?>

<!-- / if Right and Left side bar exsits -->

<!-- Left side bar and Right Side Bar Exsits -->
<?php if($page['sidebar_left'] && $page['sidebar_right']): ?>
	<!-- print render($page['sidebar_left']);
	print render($page['content']);
	print render($page['sidebar_right']); -->
<?php endif ?>

<!-- Home page -->
<?php if(!$page['sidebar_left'] && !$page['sidebar_right']): ?>
	<?php print render($page['content']); ?>
<?php endif ?>
	
<div id="footer">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
				<div class="row">
				<div class="span6">
					<div class="row footer-links">
						<div class="span2 clearfix">
							<p class="desc">For Professionals</p>
							<?php print render($page['footer_col1']); ?>
						</div>
						<div class="span2 clearfix">
							<p class="desc">For Patients</p>
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
							<img src="<?php print '/' . path_to_theme() . '/images/symbol_footer_at.png"'?> class="at">
							<div class="content">
								<h1>Sign up to receive email alerts.</h1>
								<p>Your address will stay private. Unsubscribe any time.</p>
							</div>
							<form class="form-inline">
								<input id="email-field-bottom" type="text" class="email-field" style="width: 285px;" placeholder="Enter Your email address"><button type="submit" class="submit-btn">submit</button>
							</form>
						</div>
						<div class="logos clearfix">
							<a href="#"><img src="<?php print '/' . path_to_theme() . '/images/logo_bottom_endo.png'; ?>" class="endo"></a>
							<a href="#"><img src="<?php print '/' . path_to_theme() . '/images/logo_bottom_ams.png'; ?>" class="ams"></a>
							<a href="#"><img src="<?php print '/' . path_to_theme() . '/images/logo_bottom_qualitest.png'; ?>" class="qualitest"></a>
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
							<a href="#">Sitemap</a>
							<a href="#">Corporate Compliance</a>
							<a href="#">Code of Conduct</a>
							<a href="#">Privacy Policy</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
