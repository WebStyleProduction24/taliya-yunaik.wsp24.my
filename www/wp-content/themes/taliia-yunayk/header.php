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
				<a href="tel:+74732787858"><span  class="icon-phone-mobile"></span><span>8 (473) 278-78-58</span></a><br>
				<a href="tel:+79009626495"><span  class="icon-phone-mobile"></span><span>8 (900) 962-64-95</span></a>
			</div>
			<!-- <div class="menu-icon">
				<i class="fa fa-bars"></i>
			</div> -->
			<div id="menu">

					<?php wp_nav_menu( array(
						'theme_location'=> 'menu',
						'container'       => 'div', 
						'container_class' => 'uMenuV', 
						'container_id'    => 'uNMenuDiv1',
						'menu_class'      => 'uMenuRoot',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul><a href="#" id="open" class="icon-menu3">&nbsp;</a><a href="#" id="close" class="icon-menu4">&nbsp;</a>'
					
					) ); ?>
			</div>
		</div>
	</div>
	</header>