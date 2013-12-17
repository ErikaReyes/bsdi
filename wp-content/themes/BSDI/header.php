<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

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

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<div class="gato"> gato </div>

	<body <?php body_class(); ?>>
		<div id="banner">
			<div  id="inner-content"  class="container">
				<div id="banner" class="row">
					<div id="main" class="col-sm-12" role="main">
					<img src="http://placekitten.com/728/200">	
					</div>
				</div>
			</div>
		</div>

		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="row">
							<a href="#" id="logo"><img src="http://placekitten.com/100/90">	</a>
						</div>
						<div class="row" id="menu-primario">
							<nav class="navbar navbar-default" role="navigation">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<!--<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>-->
								</div>
								<div class="collapse navbar-collapse">
									<nav role="navigation">
										<?php bones_main_nav(); ?>
									</nav>
								</div><!-- /.navbar-collapse -->
							</nav>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, perferendis, blanditiis, ad consequatur nisi ab quos a quaerat corporis temporibus fugiat unde dolores doloribus at et odio cupiditate tempore molestias?</p>
						</div>
						<div class="row">
							<a href="">social</a>
						</div>
					</div>
				</div>
			</div>
		</header>

