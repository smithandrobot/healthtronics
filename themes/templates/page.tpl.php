<div class="container" style="background-color: #FFFFFF; width: 100%;">
	<div class="container">
		<div class="row-fluid">
			<div class="span12 page-top">
				<a href="/"><img class="logo" src="<?php print '/' . path_to_theme() . '/images/logo_ht.png'; ?>"></a>
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-primary">
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
					<div class="icon-bar"></div>
				</a>
				<div id="nav-primary-move" class="nav-primary">
					<div class="contact">
						<a href="#">Contact Us</a>
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
<div class="yellow-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="subnav-bg clearfix">
						<div class="row">
							<div class="span12">
								<?php 
								if($page['sub_nav'])
								{
									print render($page['sub_nav']);
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
print render($page['content']);
?>
		
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
							<!-- <ul class="unstyled footer-ul">
								<li class="desc">For Professionals</li>
								<li><a href="#">Lithotripsy</a></li>
								<li><a href="#">Laser Treatment</a></li>
								<li><a href="#">Technology Solutions</a></li>
								<li class="bold"><a href="#">Resources</a></li>
								<li class="bold"><a href="#">Events</a></li>
								<li class="bold"><a href="#">Careers</a></li>
							</ul> -->
						</div>
						<div class="span2 clearfix">
							<p class="desc">For Patients</p>
							<?php print render($page['footer_col2']); ?>
							<!-- <ul class="unstyled footer-ul">
								<li class="desc">For Patients</li>
								<li><a href="#">What We Do</a></li>
								<li><a href="#">Prostate Cancer</a></li>
								<li><a href="#">Kidney &amp; Bladder Stones</a></li>
								<li><a href="#">Enlarged Prostate</a></li>
							</ul> -->
						</div>
						<div class="span2 clearfix">
								<p class="desc">Our Company</p>
							<!-- <ul class="unstyled footer-ul"> -->
								<?php print render($page['footer_col3']); ?>
								<!-- <li class="desc">Our Company</li>
								<li><a href="#">Overview</a></li>
								<li><a href="#">Our Story</a></li>
								<li><a href="#">Our Vision</a></li>
								<li><a href="#">Total Care&trade;</a></li>
								<li><a href="#">Leadership</a></li>
								<li><a href="#">Investors</a></li>
								<li><a href="#">Endo Companies</a></li> -->
							<!-- </ul> -->
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
						<div class="span4 legal">© 2012 HealthTronics, Inc. All Rights Reserved.</div>
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
		
