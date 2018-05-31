<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title><?php echo wp_get_document_title(); ?></title>
		<?php wp_head(); ?>
</head>

<body>

	<header>
		<div id="header">
		<div class="cnt">
			<a class="logo" href="/"><img src="<?php echo get_template_directory_uri().'/images/logo.png' ?>"></a>
			<div class="phone">
				<a href="tel:+74732787858"><span  class="icon-phone-mobile"></span><span>8 (473) 278-78-58</span></a>
			</div>
			<div class="menu-icon">
				<i class="fa fa-bars"></i>
			</div>
			<div id="menu">

					<?php wp_nav_menu( array(
						'theme_location'=> 'menu',
						'container'       => 'div', 
						'container_class' => 'uMenuV', 
						'container_id'    => 'uNMenuDiv1',
						'menu_class'      => 'uMenuRoot'
					
					) ); ?>
			</div>
		</div>
	</div>
	</header>