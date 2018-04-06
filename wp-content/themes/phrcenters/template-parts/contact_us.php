<?php
/**
Template Name: Contact Us
**/
?>
<?php get_header(); ?>

 <section class="about-us contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h2><span>Location</span></h2>
                            <p><strong>Northville-Plymouth Location</strong></p>

                            <ul class="foot-info">
                                <li><span><i class="fa fa-map-signs"></i></span>
                                    <div class="foot-text"><?php echo get_option('twentyseventeen_address'); ?></div>
                                </li>
                                <li><span><i class="fa fa-phone-square"></i></span>
                                    <div class="foot-text">Office - <a href="callto:734-207-7770"><?php echo get_option('twentyseventeen_ofice'); ?></a></div>
                                    <div class="foot-text">Cell - <a href="callto:734-447-7190"><?php echo get_option('twentyseventeen_cell'); ?></a></div>
                                </li>
                                <li><span><i class="fa fa-envelope"></i></span>
                                    <div class="foot-text"><a href="mailto:Info@phrcenters.com"><?php echo get_option('twentyseventeen_email'); ?></a></div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h2><span>Office Hours</span></h2>
                            <ul class="time-list">
                                <li>Monday – Tuesday</li>

                                <li>9:00am - 5:00pm</li>

                                <li>Wednesday</li>

                                <li>9:00am - 3:00pm</li>

                                <li>Thursdays</li>

                                <li>9:00am - 7:00pm</li>

                                <li>Friday</li>

                                <li>9:00am - 4:00pm</li>

                                <li>Every other Saturday</li>

                                <li>9:00am - 4:00pm</li>
                            </ul>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2946.5938476499696!2d-83.51059868488119!3d42.39379797918461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824ab625d444715%3A0xc66434c566ae2fde!2s47235+Five+Mile+Road%2C+Plymouth%2C+MI+48170%2C+USA!5e0!3m2!1sen!2sin!4v1511334706623" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h2><span>Request a FREE Consultation</span> </h2>
                    <p> At PHR Laser Centers, we are always eager to hear form you. Please use the submission form below to send us your inquiries or to schedule an appointment and a representative will respond to you as quickly as possible. We offer complimentary consultations.</p>
					<div class="request-form">  <?php echo do_shortcode('[contact-form-7 id="90" title="contact us"]'); ?></div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>