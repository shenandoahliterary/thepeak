<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShenAleph
 */

?>

<article id="post-<?php the_ID(); ?>" class = "thumb"  style = "width:300px">
	<header class="entry-header">
		<a href = <?php the_permalink(); ?>><div class="card" style = "width:300px">
			<?php the_post_thumbnail(); ?>
			<div class="card-body">
				<h6 class="card-subtitle mb-2 text-muted">CONVERSATIONS</h6> <!-- this will get the category eventually-->
				<h5 class="card-title"><?php the_title(); ?></h5>
				<p class="card-text"><?php echo get_the_excerpt(); ?></p>
			</div>
    </div>
  </a>
	</header><!-- .entry-header -->
	<footer class="entry-footer">
		<?php shenAleph_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
