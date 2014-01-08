<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/component.css" />
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">
			<div class="banner-principal">
				<div class="wrap clearfix" align="center">
					<?php echo types_render_field("banner-grande", array("output"=>"html")); ?>
					<!--<img src="http://placekitten.com/728/90">-->
				</div>
			</div>

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">
					<div class="eightcol first clearfix">
						<p id="logo" class="h1" style="line-height:0px;"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png"></a></p>
					</div>
					<div class="fourcol last clearfix">
						<div class="direccion">
							Presidente Masaryk No. 61 piso 2, Col. Chapultepec Morales. C.P. 11570, Polanco, México D.F.
							<br> 5675-1690
							<br> ventas@bdsicontadores.com
						</div>
					</div>
				</div>

				<div id="inner-header" class="wrap clearfix">
					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

					<div class="eightcol first clearfix">
						<nav id="menu" class="nav" role="navigation">
							<?php bones_main_nav(); ?>
						</nav>
					</div>
					<div class="fourcol clearfix" align="right">
						<span class="button blue-cotiza btn-paddingtop" style="margin-top:5px; margin-right:30px;">¡Cotice ahora!</span>
					
						<span class="social" style="margin-left:-25px;">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-facebook.png" style="margin-left:10px;"></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-twitter.png" style="margin-left:10px;"></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/library/images/social-linked.png" style="margin-left:10px;"></a>
						</span>
					</div>
				</div>
				</div>

			</header>
