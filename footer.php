<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package interstellar
 */

?>
<hr>
<footer id="colophon" class="site-footer interstellar-footer container-fluid">
	<div class="row bg-dark2 mb-3">
		<div class="col-12 text-lg-center">
			<h4 class="footer-title">Sobre este tema</h4>
			<p class="footer-text">Este es un tema de ejemplo desarrollado para wordpress adaptable a dispositivos mobiles y desktop (se obviaron tablets), creado con underscore.me, bootstrap, sass y webpack</p>
		</div>
	</div>
	<div class="row bg-dark3">
		<div class="col-12 col-lg-6 align-items-center">
			<h6 class="mt-3 mb-0"><?php printf( esc_html__('Tema: %1$s por %2$s', 'ss'), 
			'Interstellar', '<a href="https://alvarengav.com" class="text-orange">Luis Alvarenga</a>'); ?></h6>
		</div>
		<div class="col-12 col-lg-6">
			<ul class="nav nav__brands justify-content-lg-end">
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a>
				</li>
			</ul>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/preloader-js.js"></script>
<?php wp_footer(); ?>

</body>

</html>