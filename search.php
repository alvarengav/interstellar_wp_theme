<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package interstellar
 */

get_header();
?>
<main id="primary" class="site-main container-fluid">
	<div class="row">
		<div class="col-12 col-lg-9">
			<?php if (have_posts()) : ?>

				<header class="page-header mb-4">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf(esc_html__('Resultados de busqueda para: %s', 'interstellar'), '<span>' . get_search_query() . '</span>');
						?>
					</h1>
				</header><!-- .page-header -->
				<div class="posts">
					<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part('template-parts/content', 'search');

					endwhile; ?>
				</div>
			<?php
			else :
				get_template_part('template-parts/content', 'none');

			endif;
			?>
			<div class="my-4">
				<?php the_posts_navigation(); ?>
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
