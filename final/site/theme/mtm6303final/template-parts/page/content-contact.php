<?php
/**
 * Template part for displaying page contact in page.php
 *
 * Contains the closing of the id=main div and all content after
 *
 *  @package WordPress
 * @subpackage mtm6303final
 * @since MTM6303 1.0
 */
get_header() ;
?>



<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'contact' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->


<?php get_footer() ; ?>


