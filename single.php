<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package interstellar
 */

get_header();
?>

<main id="primary" class="site-main container-fluid">
	<style>
		.site-main img{
			max-width: 100%;
			height: auto;
		}
	</style>

	<div class="row">
		<div class="col-lg-9">
			<?php while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', get_post_type());
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__('Anterior:', 'interstellar') . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__('Siguiente:', 'interstellar') . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
			?>
				Puede <a href="#respond">dejar un comentario</a>, o
				<a href="<?php trackback_url(); ?>">trackback</a>
				desde su propio sitio.

			<?php endwhile; // End of the loop.
			?>
		</div>

		<div class="col-lg-3">
			<?php get_sidebar(); ?>
		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
