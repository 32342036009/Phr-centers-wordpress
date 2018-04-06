<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section class="main-content">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				//the_title();
				the_content();
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
</div><!-- .wrap -->
</section>
<?php get_footer();
