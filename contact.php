<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Deliver Theme | Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=0;"> 
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<meta name="format-detection" content="telephone=no">

        <link rel="stylesheet" href="styles.css">

        <script src="js/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript" >var base_url='http://<?php echo $_SERVER['HTTP_HOST'].substr(str_replace(basename($_SERVER['SCRIPT_FILENAME']), '', $_SERVER['SCRIPT_NAME']), 0, -1);?>/'</script>
    </head>
    <body>
    	<div id="wrapper_content">
	        <!--[if lt IE 7]>
	            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	        <![endif]-->
			<div class="wrapper">
		        <header>
		        	<a href="index.php" id="logo" class="ir">Website</a>
			        	<ul class="socials">
			        		<li><a target="_blank" href="https://twitter.com/bestpsdfreebies" class="ir twitter">twitter</a></li>
			        		<li><a target="_blank" href="https://www.facebook.com/bestpsdfreebies" class="ir facebook">facebook</a></li>
			        		<li><a target="_blank" href="http://feeds.feedburner.com/bestpsdfreebies" class="ir rss">rss</a></li>
			        		<li><a target="_blank" href="http://www.pinterest.com/mjreimer/psd-freebies/" class="ir pinterest">pinterest</a></li>
			        		<li><a target="_blank" href="https://plus.google.com/102784875057987299787/posts" class="ir google">google+</a></li>
			        		<li><a target="_blank" href="http://dribbble.com/bestpsdfreebies" class="ir dribbble">dribbble</a></li>
			        		<li><a href="#" class="ir linkedin">linkedin</a></li>
			        		<li><a href="#" class="ir flickr">flickr</a></li>
			        		<li><a href="#" class="ir youtube">youtube</a></li>
			        	</ul>
			        </header>
	        </div><!-- /wrapper -->
		    <div id="menu">
				<div class="wrapper">
					<div id="menu_trigger" class="mobile">menu</div>
		        	<nav>
			        		<ul>
			        			<li><a href="index.php">Home</a></li>
								<li><a href="portfolio.php">Portfolio</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li><a href="archive.php">Archive</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li>
									<a href="shortcodes-with-sidebar.php">Other Pages <span class="drops"></span></a>
									<div class="drop">
										<div class="top"></div>
										<ul>
											<li><a href="process.php">Our Process</a></li>
											<li>
												<a href="shortcodes-full-width.php">Full Width & Shortcodes <span class="drops"></span></a>
												<div class="drop">
													<ul>
														<li><a href="shortcodes-full-width.php">Buttons</a></li>
														<li><a href="shortcodes-full-width.php">Tabs & Toggles</a></li>
														<li><a href="shortcodes-full-width.php">Alerts</a></li>
														<li class="last"><a href="shortcodes-full-width.php">Columns</a></li>
													</ul>
												</div>
											</li>
											<li class="last"><a href="404.php">404 Page</a></li>
										</ul>
									</div>
								</li>
								<li class="active"><a href="contact.php">Contact Us</a></li>
			        		</ul>
			        	</nav>
		        	<div class="search">
		        		<form method="post" action="#" id="search_form">
		        			<fieldset>
		        				<input type="text" id="search_text" placeholder="Search">
		        				<input type="submit" value="GO" id="search_submit">
		        				<p class="btn_search">search</p>
		        			</fieldset>
		        		</form>
		        	</div>
		        	<div class="clearfix"></div>
					</div><!-- /wrapper -->
		    </div>
	        <div id="featured">
	        	<div class="wrapper">
	        		<h1>Contact Us</h1>
	        	</div>
	        </div><!-- /featured -->
			<div class="wrapper contact_page">
				<section class="call_action">
					<div>
						<h2>We would like to hear from you!</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
					</div>
				</section>
				<div id="content" class="not_single">
					<article class="post">
						<div class="entry">
							<h3>Contact Form</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>							
							<div id="success" class="alert_box success" style="display:none"><p>Form was submitted.</p></div>
							<form action="ajaxform.php" method="post" name="contact" id="contact">
								<fieldset>
									<label class="label">Name <span class="req">*</span></label>
									<small class="note">Your full name please.</small>
									<small class="error">Name required</small>
									<input type="text" id="f_name" name="f_name">
								</fieldset>
								<fieldset>
									<label class="label">Email Address <span class="req">*</span></label>
									<small class="note">This will be the email I contact you with.</small>
									<small class="error">incorrect email address</small>
									<input type="email" id="f_email" name="f_email">
								</fieldset>
								<fieldset>
									<label class="label">Subject <span class="req">*</span></label>
									<small class="note">Be creative if you like.</small>
									<small class="error">Subject required</small>
									<input type="text" name="f_subj" id="f_subj">
								</fieldset>
								<fieldset>
									<label class="label">Message <span class="req">*</span></label>
									<small class="note">Please don’t send me too long of a message ... jks!</small>
									<small class="error">Message required</small>
									<textarea name="f_message" id="f_message"></textarea>
								</fieldset>
								<fieldset class="submit">
									<input type="submit" value="Send Message" class="btn">
								</fieldset>
							</form>
							<div class="clearfix"></div>
						</div>
					</article>
				</div><!-- /content -->
				<aside id="sidebar">
					<div class="sidebar_widgets">
						<div class="widget widget_text">
							<h3 class="widgettitle">Our Location</h3>
							<div class="textwidget">
								<p>Come check out office out and meet our team in person.</p>
								<p>222 Avenue C South<br>
								Saskatoon, Saskatchewan<br>
								S7K 2N5</p>
							</div>
						</div>
						<div class="widget widget_text">
							<h3 class="widgettitle">Contact Information</h3>
							<div class="textwidget">
								<p>
									<strong>Email:</strong> info@deliver.ca<br>
									<strong>Primary Phone:</strong> 1 (306) 222 - 3456<br>
									<strong>Alternate Phone:</strong> 1 (306) 222 - 4567<br>
									<strong>Fax:</strong> 1 (306) 222 - 5678
								</p>
							</div>
						</div>
						<div class="widget widget_text">
							<h3 class="widgettitle">Office Hours</h3>
							<div class="textwidget">
								<p>
									<span>Monday - Friday</span> 8 am - 5 pm<br>
									<span>Saturday - Sunday</span> Closed<br>
									<span>Holidays</span> Closed
								</p>
								<p>* Feel free to email or call us after hours.</p>
							</div>
						</div>
					</div>
				</aside><!-- /sidebar -->
				<div class="clearfix"></div>
			</div><!-- /wrapper -->
			<div class="wrapper">
				<section class="call_action bottom">
					<div>
						<h2>Do you like this Theme?</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
						<p><a href="#" class="btn">Purchase</a></p>
					</div>
				</section>
			</div><!-- /wrapper -->
    	</div>
    	
    	<div class="wrapper">
	    	<footer>
	    		<section class="top">
	    			<div class="info">
			        	<a href="#" class="ir" id="logo_footer">Website</a>
			        	<ul class="socials">
			        		<li><a target="_blank" href="https://twitter.com/bestpsdfreebies" class="ir twitter">twitter</a></li>
			        		<li><a target="_blank" href="https://www.facebook.com/bestpsdfreebies" class="ir facebook">facebook</a></li>
			        		<li><a target="_blank" href="http://feeds.feedburner.com/bestpsdfreebies" class="ir rss">rss</a></li>
			        		<li><a target="_blank" href="http://www.pinterest.com/mjreimer/psd-freebies/" class="ir pinterest">pinterest</a></li>
			        	</ul>
	    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit mivitae. Vestibulum gravida quam quis nunc rutrum placerat. Proin eu mi vitae neque veh interdum id nec turpis nam auctor faucibus sollicitudin.</p>
	    			</div>
	    			<div class="widgets">
	    				<div class="widget widget_text">
	    					<h3 class="widgettitle">Contact info</h3>
	    					<div class="textwidget">
	    						<p>222 Avenue C South<br>Saskatoon, SK <br>Canada S7K 2N5</p>
	    						<p>info@deliver.ca</p>
	    						<h4>1.306.222.3456</h4>
	    					</div>
	    				</div>
	    				<div class="widget widget_menu">
	    					<h3 class="widgettitle">Quick Links</h3>
			        		<ul>
								<li><a href="portfolio.php">Portfolio</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="archive.php">Archive</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="services.php">Services</a></li>
								<li><a href="contact.php">Contact Us</a></li>
			        		</ul>
	    				</div>
	    				<div class="widget widget_newsletter">
	    					<h3 class="widgettitle">Newsletter</h3>
	    					<div class="textwidget">
	    						<p>Lorem ipsum dolor sit amet dolor consectetur adipiscing elit.</p>
				        		<form method="post" action="#">
				        			<fieldset>
				        				<input type="text" placeholder="Email">
				        				<input type="submit" value="OK">
				        			</fieldset>
				        		</form>
	    					</div>
	    				</div>
	    			</div>
	    		</section><!-- /top -->
	    		<section class="bottom">
	    			<p class="copyrights">Copyright 2013 Deliver. All Rights Reserved.</p>
	    			<ul>
	    				<li><a href="about.php">About</a></li>
	    				<li><a href="#">Privacy Policy</a></li>
	    				<li><a href="contact.php">Contact</a></li>
	    			</ul>
	    		</section><!-- /bottom -->
	    	</footer><!-- /footer -->
		</div><!-- /wrapper -->

        <script src="js/jquery.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.placeholder.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/jquery.magnific.popup.min.js"></script>
        <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="js/jquery.magnific.popup.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
