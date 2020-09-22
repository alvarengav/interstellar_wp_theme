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

	<main id="primary" class="site-main">
		<h1>Mi Post</h1>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			echo "<h1 style='color:red'>" . get_post_type() . "</h1>";
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'interstellar' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'interstellar' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			echo 'haga seguimiento a los comentarios con ' . post_comments_feed_link('Example', the_ID());

			echo '<p>' . $post->comment_status . $post->ping_status . '</p>';
?>
			Puede <a href="#respond">dejar un comentario</a>, o 
			<a href="<?php trackback_url(); ?>">trackback</a> 
		  desde su propio sitio.

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
