<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package interstellar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/light-style.css?ver=<?php echo _S_VERSION; ?>" type="text/css"/>

	<?php wp_head(); ?>

	<?php if (is_front_page()) : ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/front-page.css" media="print" onload="this.media='all'; this.onload=null;">
	<?php endif; ?>

	<?php if(is_home()): ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/home.css?ver=<?php echo _S_VERSION; ?>" media="print" onload="this.media='all'; this.onload=null;">
	<?php endif; ?>

	<?php if(is_search()): ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/search.css?ver=<?php echo _S_VERSION; ?>" media="print" onload="this.media='all'; this.onload=null;">
	<?php endif; ?>	
</head>

<body <?php body_class('preloader'); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header class="blog-header">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark2">
				<a class="navbar-brand" href="<?php bloginfo('url') ?>">
					<?php
					$custom_logo_id = get_theme_mod('custom_logo');
					$image_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);

					if (has_custom_logo()):
						$image = wp_get_attachment_image_src($custom_logo_id, 'full');
					?>
					<img src="<?php echo $image[0] ?>" alt="<?php echo $image_alt ? $image_alt : bloginfo('name'); ?>">

					<?php else: ?>
						<span class="font-weight-bold"><?php bloginfo('name'); ?></span>
					<?php endif; ?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php
					$header_menu = wp_nav_menu(array(
						'echo' => false,
						'theme_location' => 'header-menu',
						'container' => '',
						'menu_class' => 'navbar-nav ml-auto',
						'fallback_cb' => false,
					));
					$there_menu = !empty($header_menu);
					if ($there_menu) : echo $header_menu; endif;
					?>
					<ul class="navbar-nav external-brands <?php if($there_menu): echo 'mx-lg-5'; else: echo 'ml-auto mr-lg-5'; endif;?>">
						<li id="github-brand" class="nav-item"><a href="https://github.com/lalvarenga/interstellar_wp_theme" class="nav-link" target="_blank">
								<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="svg-inline--fa fa-github fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
									<path fill="white" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
								</svg>
							</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- #masthead -->
		<?php get_template_part('template-parts/preloader') ?>