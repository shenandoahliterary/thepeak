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
		<main id="main" class="site-main container">
			<section class="row">
			
		<?php
		if ( have_posts() ) :
							/* Start the Loop if single-then content, if not else this*/
							$count = 1;
							while ( have_posts() ) :
								the_post();
								if ( is_single() ) :
		 						 get_template_part( 'template-parts/content', get_post_type() );
							 else:
								?> <div class="col-md-4"><?php
								 if ($count == "1") {
									
 								}
								 
							 // ... make column, add 1/3 of the posts, second column, third column
							 //content-peak creates article template
								get_template_part( 'template-parts/content', 'peak' );
								?> 
								<?php
								endif;
								$count += 1;
							endwhile;
							?></div><?php
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						the_posts_pagination();

						?>

<!-- a test comment here appears at the bottom of page 1 before the pagination, but on p2 it appears after the pagination -->
					</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
