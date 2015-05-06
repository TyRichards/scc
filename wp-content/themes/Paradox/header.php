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
		<meta name="author" content="Shannon Thomas">
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
	
		<!--[if lte IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->	
		<div class="container">		
		
		<?php do_action('before'); ?> 
		<header>			
			<section class="container-fluid top-header hidden-xs">
				<div class="row">
					<div class="col-sm-4 header-left">
						<?php if (is_active_sidebar('header-left')) { ?> 
							<div class="pull-left text-left">
								<?php dynamic_sidebar('header-left'); ?> 
							</div>
							<div class="clearfix"></div>
						<?php } // endif; ?> 						
					</div>
					<div class="col-sm-4 header-logo">
						<div class="main-logo">
							<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
					        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Xstream Inspections Commercial & Residential Inspections" width="100%">
					        </a>
				        </div>			        
					</div>
					<div class="col-sm-4 header-right">					
						<?php if (is_active_sidebar('header-right')) { ?> 
							<div class="pull-right text-right">
								<?php dynamic_sidebar('header-right'); ?> 
							</div>
							<div class="clearfix"></div>
						<?php } // endif; ?> 
					</div>
				</div>
			</section><!--.section-top-header-->		
			
			<section class="top-navbar">				
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">						
						<div class="navbar-header">	
							<div class="col-xs-10 col-no-padding-xs visible-xs">
								<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" width="100%">	
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sm.png" alt="Xstream Inspections Commercial & Residential Inspections">
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

							<a class="btn btn-default navbar-btn navbar-right visible-lg" href="#">
								Test
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
				    <a class="btn btn-primary btn-lg btn-block" href="tel:8178978882">
				        (817) 897-8882
				    </a> 
			    </div>
			    <div class="col-xs-6 col-no-padding-xs phone" style="padding-left:5px">
				    <a class="btn btn-primary btn-lg btn-block" href="mailto:shannon@southlakecounseling.org">
				        Send Email
				    </a> 				    
			    </div>
			</section>			