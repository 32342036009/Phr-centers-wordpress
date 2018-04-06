<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer-widget">
                        <h4>Quick Links</h4>
                        	<?php wp_nav_menu( array(
                                                    'menu'              => 'Quick link',
                                                    'theme_location'    => 'primary',
                                                    'menu_class'        => 'foot-links',
                                                    'walker'            => new wp_bootstrap_navwalker()));?>
                            
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-widget">
                        <h4>Our Services</h4>
                           <?php wp_nav_menu( array(
                                                    'menu'              => 'our services',
                                                    'theme_location'    => 'primary',
                                                    'menu_class'        => 'foot-links',
                                                    'walker'            => new wp_bootstrap_navwalker()));?>
                   </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-widget">
                        <h4>Contact Us</h4>
                        <ul class="foot-info">
                            <li><span><i class="fa fa-map-signs"></i></span>
                                <div class="foot-text"><?php echo get_option('twentyseventeen_address'); ?></div>
                            </li>
                            <li><span><i class="fa fa-phone-square"></i></span>
                                <div class="foot-text">Office - <a href="callto:734-207-7770"><?php echo get_option('twentyseventeen_ofice'); ?></a></div>
								<div class="foot-text">Cell -<a href="callto:734-447-7190"><?php echo get_option('twentyseventeen_cell'); ?></a></div>
                            </li>
                            <li><span><i class="fa fa-envelope"></i></span>
                                <div class="foot-text"><a href="mailto:Info@phrcenters.com"><?php echo get_option('twentyseventeen_email'); ?></a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="container">
			<p>2017 All Rights Reserved. PHRC-Plymouth INC!</p>
        </div>
    </div>
    <script type="text/javascript" src="<?= get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri();  ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= get_template_directory_uri();  ?>/assets/js/owl.carousel.js"></script>
    <script src="<?= get_template_directory_uri();  ?>/assets/js/custom.js"></script>
<?php wp_footer(); ?>
<script>
if( jQuery(".toggle .toggle-title").hasClass('active') ){
		jQuery(".toggle .toggle-title.active").closest('.toggle').find('.toggle-inner').show();
	}
	jQuery(".toggle .toggle-title").click(function(){
		if( jQuery(this).hasClass('active') ){
			jQuery(this).removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
		}
		else{	jQuery(this).addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);
		}
	});
</script>
</body>
</html>
