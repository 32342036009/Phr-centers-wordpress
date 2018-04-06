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

 <section class="about-us blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">

			<?php
			
			while ( have_posts() ) : the_post();   ?>
			<img src="<?php echo get_field('blog_image_field'); ?>">


               <?php  echo get_the_date();
				the_content();
			endwhile; 
			?>

		</main>
	</div>
	<?php get_sidebar(); ?>
</div></div>
</div>
</section>
<?php get_footer();
