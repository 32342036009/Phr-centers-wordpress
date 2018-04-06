<?php
/**
Template Name: Blog
**/
?>
<?php get_header(); ?>

<section class="news">
			        <div class="container">
			            <div class="row">
			              		                
			               <?php $sqls = array('post_type' =>'post',
		                               'post_status'=>'publish',
		                               'posts_per_page'=>3,); ?>
		                               <?php $results= new WP_Query($sqls); ?>
		            				   <?php while($results->have_posts()):$results->the_post(); ?>
		            				   	<div class="col-sm-4">
			                    <div class="news-box">
			                        <div class="news-img"><img src="<?php echo get_field('blog_image_field'); ?>"></div>
			                        <div class="news-text">
			                            <div class="news-date"><?php echo get_the_date(); ?></div>
			                            <div class="news-desc"><a href="<?php the_permalink(); ?>"><?php the_content(); ?></a></div> <a class="read-more" href="<?php the_permalink(); ?>">Read More</a> </div>
			                   </div></div>
			                     <?php endwhile; wp_reset_query(); ?> 
			                
			            </div>
			            </div>
</section>

<?php get_footer(); ?>