<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShenAleph
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :
							/* Start the Loop if single-then content, if not else this*/
							while ( have_posts() ) :
								the_post();
								if ( is_single() ) :
		 						 get_template_part( 'template-parts/content', get_post_type() );
							 else:
								get_template_part( 'template-parts/content', 'peak' );
								endif;
								/* else {
									// code...
								}get_template_part( 'template-parts/content', get_post_type() ); */
							endwhile;

						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
