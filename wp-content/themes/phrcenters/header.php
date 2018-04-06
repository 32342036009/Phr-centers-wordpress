<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php the_title(); ?></title>
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/x-icon" />
    <link href="<?= get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= get_template_directory_uri(); ?>/assets/css/owl.carousel.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 top-logo">
                    <a class="logo" href="<?php the_permalink(5); ?>"> <img alt="" src="<?= get_option('twentyseventeen_logo'); ?>" /> </a>
                </div>
                <div class="col-sm-9">
                    <div class="top-right clearfix">
                        <ul class="top-social">
                            <li><a target="_blank" href="<?= get_option('twentyseventeen_facebook_link'); ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="<?= get_option('twentyseventeen_instagram_link'); ?>"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="<?= get_option('twentyseventeen_yelp_link'); ?>"><i class="fa fa-yelp"></i></a></li>
                        </ul>
                        <ul class="header-right clearfix">
                            <li><span class="top-icon"><i class="fa fa-envelope-open-o"></i></span>
								<div class="text-wrap"><strong>Email Us</strong> <span><a href="mailto:Info@phrcenters.com"><?php echo get_option('twentyseventeen_email'); ?></a></span></div>
                            </li>
                            <li><span class="top-icon"><i class="fa fa-phone"></i></span>
								<div class="text-wrap"><strong>Call Us</strong> <span><a href="callto:734-207-7770"><?php echo get_option('twentyseventeen_calls'); ?></a></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="second-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNav"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse" id="MyNav">
				<?php wp_nav_menu( array(
                                                    'menu'              => 'primary',
                                                    'theme_location'    => 'primary',
                                                    'menu_class'        => 'nav navbar-nav',
                                                    'walker'            => new wp_bootstrap_navwalker()));?>
            </div>
                </div>
            </div>
            
            
            
        </div>
    </div>
	<?php if(is_page(5)){ ?>
     <section class="main-slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
		             <?php $sql = array('post_type' =>'slider' ,
		                               'post_status'=>'publish',
		                               'posts_per_page'=>-1,); 
		             	   				$counter= 1;?>
		            <?php $result= new WP_Query($sql); ?>
		            <?php while($result->have_posts()):$result->the_post(); ?>
                <div class="item <?php if($counter==1){echo "active"; } ?>">
                <?php the_post_thumbnail(); ?>
                 </div>
                 <?php $counter++; endwhile; wp_reset_query();?>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="fa fa-angle-double-left"></span> <span class="sr-only">Previous</span> </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="fa fa-angle-double-right"></span> <span class="sr-only">Next</span> </a>
        </div>
        
            <div class="consultation">
                <h3>Request a FREE Consultation!</h3>
				<div class="request-form"> <?php echo do_shortcode('[contact-form-7 id="90" title="contact us"]'); ?></div>
            </div>
     
    </section> <?php } else{    ?>
<div class="page-title">
<?php while ( have_posts() ): the_post();  ?>	
       <?php the_post_thumbnail(); ?>
        <?php if(!is_singular('post')){ ?> <h3><?php the_title();} ?></h3>
    <?php endwhile; wp_reset_query(); } ?> 
	</div>	
    <script type="text/javascript">
    	jQuery(document).ready(function(){
    		jQuery("li.dropdown>a").attr("data-toggle", "dropdown");
			//jQuery("#menu-item-70").attr("data-toggle", "dropdown");
    	});
    </script>