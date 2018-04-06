<?php
/**
Template Name: Home
**/
?>
<?php get_header(); ?>
<section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <figure class="img-full abt-img"><img src="<?php echo get_field('image'); ?>"></figure>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h2><span><?= get_field('title'); ?></span></h2>
						<p><?= get_field('description'); ?></p> <a href="<?php the_permalink(7); ?>">Read More</a> </div>
            </div>
        </div>
    </section>

<!-- Services -->

<section class="services-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Services</h2>
                    <div id="services" class="owl-carousel owl-theme">
                    <?php $sql = array('post_type' =>'our_services',
					                               'post_status'=>'publish',
					                               'posts_per_page'=>-1,); ?>
					                               <?php $result= new WP_Query($sql); ?>
					            					<?php while($result->have_posts()):$result->the_post(); ?>
        <div class="item">
            <div class="service-box">
                <div class="service-img"><img src="<?php echo get_field('services_image'); ?>"></div>
                <div class="service-text">
                    <h4><?php the_title(); ?></h4>
                    <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?> </p> <a href="<?php the_permalink(); ?>"><i class="fa fa-angle-right"></i></a> 
                </div>
            </div>
        </div>
                     <?php endwhile; wp_reset_query(); ?>  
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Services -->

<!-- Blog -->
			<section class="news">
			        <div class="container">
			            <div class="row">
			                <div class="col-md-12">
			                    <h2>Blogs, News & Events</h2></div>
			                
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
			                            <div class="news-desc"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_content(), 20, '...' );
 ?></a></div> <a class="read-more" href="<?php the_permalink(); ?>">Read More</a> </div>
			                   </div></div>
			                     <?php endwhile; wp_reset_query(); ?> 
			                
			            </div>
			            </div>
			    </section>

<!-- Blog -->

<section class="call-out">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Sign Up For Newsletter</h2>
				<p>We will send you about the updates, just leave us your mail id</p>
			</div>
			<div class="col-md-6">
				<div class="contact-box">
					<form method="post" action="http://webdesigndemo1.com/phr-centers/?na=s" onsubmit="return newsletter_check(this)">
					<form method="post" action="" onsubmit="" class="contact-form">
						<div class="row clearfix">
							<div class="form-group col-sm-8 col-xs-12">
								<input class="tnp-email" type="email" name="ne" placeholder="Email Address*" required>
							</div>
							<div class="form-group col-sm-4">
								<button type="submit" name="submit" class="btn-style-one center tnp-submit">Subscribe</button>
							</div>
						</div>
					</form>
						</div>		
				
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>