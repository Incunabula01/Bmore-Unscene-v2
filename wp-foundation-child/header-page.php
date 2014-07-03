<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title('', true, 'right'); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- icons & favicons -->
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
				
	</head>
	
	<body <?php body_class(); ?>>

		<div class="row container">
			<div class="twelve columns">
				<header role="banner" id="top-header" class="bu-header-page">
					<div class="wrapper">
							
								<?php bones_main_nav(right); // Adjust using Menus in Wordpress Admin ?>
							
							<div class="show-for-small menu-action">
					  	    	<a href="#sidebar" id="mobile-nav-button" class="sidebar-button small button">
									<i class="icon-reorder" alt="Menu"></i> 
								</a>
							</div>
						
								<?php bones_mobile_nav(); ?>

							<div class="siteinfo">
								<div id="main-logo">
									<a class="brand" id="logo" href="<?php echo get_bloginfo('url'); ?>">
										<div class="logo-icon"></div>
									</a>
									<a href="<?php echo get_bloginfo('url'); ?>" >
										<h1>
											<?php bloginfo('name'); ?>
										</h1>
									</a>
										<h4 class="subhead">
											<?php echo get_bloginfo ( 'description' ); ?>
										</h4>
								</div>
							</div>
					</div>
				</header> <!-- end header -->
			</div>	
				