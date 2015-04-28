<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="author" content="Shelly Morgan">
		<title><?php wp_title('|', true, 'right'); ?></title>		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">	

		<?php wp_head(); ?>
	
		<!--[if lte IE 8]>
			<meta http-equiv="REFRESH" content="0;url=http://www.browsehappy.com/">
		<![endif]-->	
	</head>
	<body <?php body_class(); ?>>

		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-49327923-1', 'xstreaminspections.com');
		  ga('send', 'pageview');

		</script>		

		<!--[if lte IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->			
		
		<?php do_action('before'); ?> 
		<header>			
			<section class="container top-header hidden-xs">
				<div class="col-sm-7 col-md-6 header-left col-no-padding-xs">
<!-- 					<h2 class="site-title">
						<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
					</h2>
					<p class="site-description">						
						<?php bloginfo('description'); ?> 						
					</p> -->
					<div class="main-logo col-sm-10 col-md-9 col-no-padding-xs">
						<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
				        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/xstream-inspections-logo-darkbg.svg" alt="Xstream Inspections Commercial & Residential Inspections" width="100%">
				        </a>
			        </div>			        
				</div>
				<div class="col-sm-5 col-md-6 header-right">
					<div class="sr-only">
						<a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic'); ?>"><?php _e('Skip to content', 'bootstrap-basic'); ?></a>
					</div>
					<?php if (is_active_sidebar('header-right')) { ?> 
					<div class="pull-right text-right">
						<?php dynamic_sidebar('header-right'); ?> 
					</div>
					<div class="clearfix"></div>
					<?php } // endif; ?> 
				</div>
			</section><!--.section-top-header-->		
			
			<section class="top-navbar">				
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">						
						<div class="navbar-header">	
							<div class="col-xs-10 col-no-padding-xs visible-xs">
								<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" width="100%">	
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/xstreaminspections-logo-sm.svg" alt="Xstream Inspections Commercial & Residential Inspections">							
								</a>	
							</div>											
							<div class="col-xs-2 col-no-padding-xs">
								<button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target=".navbar-primary-collapse">
									<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>									
								</button>
							</div>					
						</div>
						
						<div class="collapse navbar-collapse navbar-primary-collapse">
							<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-left', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
							<?php if (is_active_sidebar('navbar-right')) { 								
								dynamic_sidebar('navbar-right'); 
							} ?> 

							<a class="btn btn-danger navbar-btn navbar-right visible-lg" href="/schedule-inspection">
								<i class="fa fa-calendar fa-1x"></i>
								Schedule Inspection
							</a>        					
						</div><!--.navbar-collapse-->
					</div>
				</nav>				
			</section> <!-- section-navbar -->
		</header>		
			
			
		<div class="body-content">

			<!-- Mobile Landing Section -->
			<section class="mobile-landing visible-xs col-xs-12">
			    <div class="col-xs-6 col-no-padding-xs phone" style="padding-right:5px">
				    <a class="btn btn-primary btn-lg btn-block" href="/schedule-inspection">
				        (972) 492-7920
				    </a> 
			    </div>
			    <div class="col-xs-6 col-no-padding-xs phone" style="padding-left:5px">
				    <a class="btn btn-primary btn-lg btn-block" href="/schedule-inspection">
				        (469) 401-2504
				    </a> 
			    </div>
			    <div class="col-xs-12 col-no-padding-xs call-to-action">
				    <a class="btn btn-danger btn-lg btn-block col-xs-12" href="/schedule-inspection" style="margin-top:0px">
				        <i class="fa fa-calendar fa-1x"></i>
				        Schedule Inspection
				    </a>
			    </div>
			</section>			