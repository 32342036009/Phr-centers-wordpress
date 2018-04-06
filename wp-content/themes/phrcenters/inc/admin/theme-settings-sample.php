<?php
/**
 * WPshed Theme Options
 */


 /** This will be displayed in the options panel header */
$theme_name = wp_get_theme() . ' - ' . __( 'Theme Options', 'twentyseventeen' );

/** The short name gives a unique element to each options id. */
$shortname = 'twentyseventeen';


/** Below are few sample arrays that we can use in our options. */

// Advanced Array Example
$advanced_array = array(
    'value_1' => 'Option Name 1',
    'value_2' => 'Option Name 2'
);


/**
 * Here we will set the options we are going to have in the theme options panel.
 */
$options = array(); // If you delete this line, the sky will fall down! So you better don't.



/* ---------------------------------------------------------------------------------------------------
    Headings (tabs)
--------------------------------------------------------------------------------------------------- */

$options[] = array( 'title'   => __( 'General Settings', 'twentyseventeen' ), // Tab name
                    'tab'     => 'options', // Tab slug (unique)
                    'type'    => 'heading'); // type = Heading


/* ---------------------------------------------------------------------------------------------------
    First Tab
--------------------------------------------------------------------------------------------------- */


// Info (title - description)
$options[] = array( 'title'   => __( 'Header & Footer Options', 'twentyseventeen' ), // optional
					'tab'     => 'options', // must be the same slug as the heading it's belongs to
                    'desc'    => __( '', 'twentyseventeen' ), // optional
                    'type'    => 'info' );

$options[] = array( 'title'   => __( 'Header Logo', 'twentyseventeen' ),
					'tab'     => 'options',
                    'desc'    => __( '', 'twentyseventeen' ),
                    'id'      => $shortname . '_logo',
                    'std'     => '',
                    'type'    => 'upload' );




$options[] = array( 'title'   => __( 'Call Us', 'twentyseventeen' ),
					'tab'     => 'options',
                    'desc'    => __( '', 'twentyseventeen' ),
                    'id'      => $shortname . '_calls',
                    'std'     => '',
                    'type'    => 'text' );



$options[] = array( 'title'   => __( 'Email', 'twentyseventeen' ),
					'tab'     => 'options',
                    'desc'    => __( '', 'twentyseventeen' ),
                    'id'      => $shortname . '_email',
                    'std'     => '',
                    'type'    => 'text' );


			
$options[] = array( 'title'   => __( 'Facebook Link', 'twentyseventeen' ),
					'tab'     => 'options',
                    'desc'    => __( '', 'twentyseventeen' ),
                    'id'      => $shortname . '_facebook_link',
                    'std'     => '',
                    'type'    => 'text' );
					
$options[] = array( 'title'   => __( 'Instagaram', 'twentyseventeen' ),
					'tab'     => 'options',
                    'desc'    => __( '', 'twentyseventeen' ),
                    'id'      => $shortname . '_instagram_link',
                    'std'     => '',
                    'type'    => 'text' );
					
$options[] = array( 'title'   => __( 'Yelp Link', 'twentyseventeen' ),
					'tab'     => 'options',
                    'desc'    => __( '', 'twentyseventeen' ),
                    'id'      => $shortname . '_yelp_link',
                    'std'     => '',
                    'type'    => 'text' );

$options[] = array( 'title'   => __( 'Address', 'twentyseventeen' ),
					'tab'     => 'options',
                    'desc'    => __( '', 'twentyseventeen' ),
                    'id'      => $shortname . '_address',
                    'std'     => '',
                    'type'    => 'text' );

$options[] = array( 'title'   => __( 'Office Number', 'twentyseventeen' ),
					'tab'     => 'options',
                    'desc'    => __( '', 'twentyseventeen' ),
                    'id'      => $shortname . '_ofice',
                    'std'     => '',
                    'type'    => 'text' );

$options[] = array( 'title'   => __( 'Cell', 'twentyseventeen' ),
					'tab'     => 'options',
                    'desc'    => __( '', 'twentyseventeen' ),
                    'id'      => $shortname . '_cell',
                    'std'     => '',
                    'type'    => 'text' );



// Do not edit or delete below. This will include any child theme options.
if ( file_exists(get_stylesheet_directory() .'/theme-settings.php') ) {
    include get_stylesheet_directory() .'/theme-settings.php';
}
