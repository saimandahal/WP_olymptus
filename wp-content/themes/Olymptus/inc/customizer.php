<?php
/**
 * Olymptus Theme Customizer
 *
 * @package Olymptus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function olymptus_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'olymptus_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'olymptus_customize_partial_blogdescription',
			)
		);
	}
//HOME SECTION
	$wp_customize->add_panel('banner_panel', array(
		'title'=> 'Home Page',
		'priority' => 10,
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_section('basic-banner-section', array(
		'title'=> 'Banner Section',
		'priority' => 2,
		'panel'=> 'banner_panel',
	));
	$wp_customize->add_setting('basic-small-banner-title', array(
		'default'   => 'hello',
	));
	$wp_customize->add_control('basic-small-banner-title', array(
		'label'      => 'Small Heading text',
		'section'    => 'basic-banner-section',
		'settings'   => 'basic-small-banner-title',
	));
	$wp_customize->add_setting('basic-banner-title', array(
		'default'   => 'hello',
	));
	$wp_customize->add_control('basic-banner-title', array(
		'label'      => 'Title text',
		'section'    => 'basic-banner-section',
		'settings'   => 'basic-banner-title',
	) );
	$wp_customize -> add_setting('basic-banner-description', array(
		'default'=>__('lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum'
	)));
	$wp_customize -> add_control('basic-banner-description', array(
		'label'=>'Description',
		'section'=>'basic-banner-section',
		'priority'=> 2,
		'type' => 'textarea'
	));
	$wp_customize->add_setting('button-banner', array(
		'default'   => __('Book Now'),
	));
	$wp_customize->add_control('button-banner', array(
		'label'      => 'Button Text',
		'section'    => 'basic-banner-section',
		'settings'   => 'button-banner',
	));
	$wp_customize->add_setting('banner-image', array(
		'default'   => get_bloginfo('template_url'). '/assets/img/bg.png'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'banner-image', array(
		'label'      => 'Background Image',
		'section'    => 'basic-banner-section', 
	)));
	$wp_customize->add_setting('banner-icon', array(
		'default'   => get_bloginfo('template_url'). '/assets/img/quote.png'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'banner-icon', array(
		'label'      => 'Icon',
		'section'    => 'basic-banner-section', 
	)));
//Consult with expert
	$wp_customize->add_section('Consult-section', array(
		'title'=> 'Consult Section',
		'priority' => 2,
		'panel'=> 'banner_panel',
	));
	$wp_customize->add_setting('Consult-title', array(
		'default'   => 'hello',
	));
	$wp_customize->add_control('Consult-title', array(
		'label'      => 'Title Text',
		'section'    => 'Consult-section',
		'settings'   => 'Consult-title',
	) );
	$wp_customize->add_setting('Consult-description', array(
		'default'   => 'There are many variants of passages of lorem ipsum but the majority have suffered alteration in some form.',
	));
	$wp_customize->add_control('Consult-description', array(
		'label'      => 'Description Text',
		'section'    => 'Consult-section',
		'settings'   => 'Consult-description',
		'type' => 'textarea',
	) );
	//image
	$wp_customize->add_setting('consult-image', array(
		'default'   => get_bloginfo('template_url'). '/assets/img/consult-image.jpg'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'consult-image', array(
		'label'      => 'Image',
		'section'    => 'Consult-section', 
	)));
	$wp_customize->add_setting('Consult-dropdown', array(
		'default'   => '',
	));
	$wp_customize->add_control('Consult-dropdown', array(
		'label'      => 'Number of Iconbox to show',
		'section'    => 'Consult-section',
		'settings'   => 'Consult-dropdown',
		'type' => 'dropdown'
	) );
// Counter section
	$wp_customize->add_section('Counter-section', array(
		'title'=> 'Counter Section',
		'priority' => 2,
		'panel'=> 'banner_panel',
	));
	$wp_customize->add_setting('Counter-title', array(
		'default'   => '20 Years of experience in Legal cases field',
	));
	$wp_customize->add_control('Counter-title', array(
		'label'      => 'Title Text',
		'section'    => 'Counter-section',
		'settings'   => 'Counter-title',
	) );
	$wp_customize -> add_setting('Counter-description', array(
		'default'=>__('FRenrehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum aui dolorem eum fugiat quo voluptas nulla pariatu'
	)));
	$wp_customize -> add_control('Counter-description', array(
		'label'=>'Description',
		'section'=>'Counter-section',
		'priority'=> 2,
		'type' => 'textarea'
	));
	$wp_customize->add_setting('Counter-dropdown', array(
		'default'   => '',
	));
	$wp_customize->add_control('Counter-dropdown', array(
		'label'      => 'Number of Iconbox to show',
		'section'    => 'Counter-section',
		'settings'   => 'Counter-dropdown',
		'type' => 'dropdown'
	) );


//Legal Praactise
$wp_customize->add_section('Legal-section', array(
	'title'=> 'Legal Section',
	'priority' => 2,
	'panel'=> 'banner_panel',
));
$wp_customize->add_setting('Legal-title', array(
	'default'   => 'Our Legal Practic Area',
));
$wp_customize->add_control('Legal-title', array(
	'label'      => 'Title Text',
	'section'    => 'Legal-section',
	'settings'   => 'Legal-title',
) );
$wp_customize->add_setting('Legal-dropdown', array(
	'default'   => '',
));
$wp_customize->add_control('Legal-dropdown', array(
	'label'      => 'Select Template',
	'section'    => 'Legal-section',
	'settings'   => 'Legal-dropdown',
	'type' => 'dropdown-pages'
) );
// Need for about us
$wp_customize->add_section('About-more-section', array(
	'title'=> 'About more Section',
	'priority' => 2,
	'panel'=> 'banner_panel',
));
//Left
$wp_customize->add_setting('Left', array(
 ));
$wp_customize->add_control('Left', array(
	'label'      => __('Left Column'),
	'setings'  => 'Left',
	'type' => 'label',
	'section'    => 'About-more-section',
) );
$wp_customize->add_setting('About-more-small-title', array(
	'default'   => 'Need Any Types Of Help?	',
));
$wp_customize->add_control('About-more-small-title', array(
	'label'      => 'Small Title Text',
	'section'    => 'About-more-section',
	'settings'   => 'About-more-small-title',
) );
$wp_customize->add_setting('About-more-title', array(
	'default'   => 'New York City Personal Injury Attorney',
));
$wp_customize->add_control('About-more-title', array(
	'label'      => ' Title Text',
	'section'    => 'About-more-section',
	'settings'   => 'About-more-title',
) );
//right

$wp_customize->add_setting('Right', array(
));
$wp_customize->add_control('Right', array(
   'label'      => __('Right Column'),
   'setings'  => 'Right',
   'type' => 'label',
   'section'    => 'About-more-section',
) );
$wp_customize->add_setting('About-more-right-title', array(
   'default'   => 'Olymptus Law Offices is more than a law firm.
   ',
));
$wp_customize->add_control('About-more-right-title', array(
   'label'      => 'Title Text',
   'section'    => 'About-more-section',
   'settings'   => 'About-more-right-title',
) );
$wp_customize->add_setting('About-more-right-description', array(
   'default'   => 'New York City Personal Injury Attorney',
));
$wp_customize->add_control('About-more-right-description', array(
   'label'      => ' Description',
   'section'    => 'About-more-section',
   'settings'   => 'About-more-right-description',
   'type' => 'textarea'
) );

//Consulting Section

$wp_customize->add_section('Consulting-section', array(
	'title'=> 'Consulting With Expert',
	'priority' => 2,
	'panel'=> 'banner_panel',
));
//Form Section
$wp_customize->add_setting('Consulting-title', array(
	'default'   => 'Free Consulting'
	,
));
$wp_customize->add_control('Consulting-title', array(
	'label'      => 'Form Title',
	'section'    => 'Consulting-section',
	'settings'   => 'Consulting-title',
) );
//Description Section
$wp_customize->add_setting('Consulting-Description-title', array(
	'default'   => 'We are here to fight against any violence with experience.',
));
$wp_customize->add_control('Consulting-Description-title', array(
	'label'      => 'Title Text',
	'section'    => 'Consulting-section',
	'settings'   => 'Consulting-Description-title',
) );

$wp_customize->add_setting('Consulting-Description', array(
	'default'   => 'Contrary to popular belief, Lorem Ipsum is not simply random text.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',
));
$wp_customize->add_control('Consulting-Description', array(
	'label'      => 'Description',
	'section'    => 'Consulting-section',
	'settings'   => 'Consulting-Description',
	'type'  => 'textarea'
) );
$wp_customize->add_setting('Author-title', array(
	'default'   => 'John Deo',
));
$wp_customize->add_control('Author-title', array(
	'label'      => 'Author Name',
	'section'    => 'Consulting-section',
	'settings'   => 'Author-title',
) );
$wp_customize->add_setting('Author-designation', array(
	'default'   => '',
));
$wp_customize->add_control('Author-designation', array(
	'label'      => 'Designation',
	'section'    => 'Consulting-section',
	'settings'   => 'Author-designation',
) );
// Testimonials
$wp_customize->add_section('Testimonial-section', array(
	'title'=> 'Testimonial Section',
	'priority' => 2,
	'panel'=> 'banner_panel',
));
$wp_customize->add_setting('Testimonial-title', array(
	'default'   => 'What our clients Says',
));
$wp_customize->add_control('Testimonial-title', array(
	'label'      => 'Title Text',
	'section'    => 'Testimonial-section',
	'settings'   => 'Testimonial-title',
) );
$wp_customize->add_setting('Testimonial-description', array(
	'default'   => 'What our clients Says',
));
$wp_customize->add_control('Testimonial-description', array(
	'label'      => 'Description',
	'section'    => 'Testimonial-section',
	'settings'   => 'Testimonial-description',
) );
$wp_customize->add_setting('Testimonial-dropdown', array(
	'default'   => '',
));
$wp_customize->add_control('Testimonial-dropdown', array(
	'label'      => 'Select Template',
	'section'    => 'Testimonial-section',
	'settings'   => 'Testimonial-dropdown',
	'type' => 'dropdown-pages'
) );
// Dedicated Members


$wp_customize->add_section('Dedicated-member-section', array(
	'title'=> 'Dedicated Member Section',
	'priority' => 2,
	'panel'=> 'banner_panel',
));
$wp_customize->add_setting('Dedicated-member-title', array(
	'default'   => 'Our Dedicated Members',
));
$wp_customize->add_control('Dedicated-member-title', array(
	'label'      => 'Title Text',
	'section'    => 'Dedicated-member-section',
	'settings'   => 'Dedicated-member-title',
) );
$wp_customize->add_setting('Dedicated-member-description', array(
	'default'   => 'Renrehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum aui dolorem eum fugiat quo voluptas nulla pariatur',
));
$wp_customize->add_control('Dedicated-member-description', array(
	'label'      => 'Description',
	'section'    => 'Dedicated-member-section',
	'settings'   => 'Dedicated-member-description',
	'type' => 'textarea'

) );
$wp_customize->add_setting('Dedicated-member-dropdown', array(
	'default'   => '',
));
$wp_customize->add_control('Dedicated-member-dropdown', array(
	'label'      => 'Select Template',
	'section'    => 'Dedicated-member-section',
	'settings'   => 'Dedicated-member-dropdown',
	'type' => 'dropdown-pages'
) );

// Recent Activities

$wp_customize->add_section('Recent-Activities-section', array(
	'title'=> 'Recent-Activities Section',
	'priority' => 2,
	'panel'=> 'banner_panel',
));
$wp_customize->add_setting('Recent-Activities-title', array(
	'default'   => 'Our Recent Work - Case Studies',
));
$wp_customize->add_control('Recent-Activities-title', array(
	'label'      => 'Title Text',
	'section'    => 'Recent-Activities-section',
	'settings'   => 'Recent-Activities-title',
) );
$wp_customize->add_setting('Recent-Activities-description', array(
	'default'   => 'Renrehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum aui dolorem eum fugiat quo voluptas nulla pariatur',
));
$wp_customize->add_control('Recent-Activities-description', array(
	'label'      => 'Description',
	'section'    => 'Recent-Activities-section',
	'settings'   => 'Recent-Activities-description',
	'type' => 'textarea'

) );
$wp_customize->add_setting('Recent-Activities-dropdown', array(
	'default'   => '',
));
$wp_customize->add_control('Recent-Activities-dropdown', array(
	'label'      => 'Select Template',
	'section'    => 'Recent-Activities-section',
	'settings'   => 'Recent-Activities-dropdown',
	'type' => 'dropdown-pages'
) );
//Blog Area

$wp_customize->add_section('Blog-section', array(
	'title'=> 'Blog Section',
	'priority' => 2,
	'panel'=> 'banner_panel'
));
$wp_customize->add_setting('Blog-title', array(
	'default'   => 'From Our Latest Articles
	',
));
$wp_customize->add_control('Blog-title', array(
	'label'      => 'Title Text',
	'section'    => 'Blog-section',
	'settings'   => 'Blog-title',
) );

$wp_customize->add_setting('Blog-dropdown', array(
	'default'   => '',
));
$wp_customize->add_control('Blog-dropdown', array(
	'label'      => 'Select Template',
	'section'    => 'Blog-section',
	'settings'   => 'Blog-dropdown',
	'type' => 'dropdown-pages'
) );

// Newsletter Section
$wp_customize->add_section('Newsletter-section', array(
	'title'=> 'Newsletter Section',
	'priority' => 2,
	'panel'=> 'banner_panel',
));
$wp_customize->add_setting('Newsletter-title', array(
	'default'   => 'Get Latest Updates',
));
$wp_customize->add_control('Newsletter-title', array(
	'label'      => 'Title Text',
	'section'    => 'Newsletter-section',
	'settings'   => 'Newsletter-title',
) );
$wp_customize->add_setting('Newsletter-description', array(
	'default'   => 'Subscribe to our newsletter and get all updates to your inbox..',
));
$wp_customize->add_control('Newsletter-description', array(
	'label'      => 'Description Text',
	'section'    => 'Newsletter-section',
	'settings'   => 'Newsletter-description',
	'type' => 'textarea',
) );
//image
$wp_customize->add_setting('Newsletter-image', array(
	'default'   => get_bloginfo('template_url'). '/assets/img/Newsletter-image.jpg'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'Newsletter-image', array(
	'label'      => 'Image',
	'section'    => 'Newsletter-section', 
)));

//Footer Section
$wp_customize->add_panel('Footer', array(
	'title'=> 'Footer',
	'capability' => 'edit_theme_options',
));
$wp_customize->add_section('footer-section', array(
	'title'=> 'Logo & Description',
	'panel'=> 'Footer',
));
$wp_customize->add_setting('footer-description', array(
	'default'   => 'Renrehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum aui dolorem eum fugiat quo voluptas nulla pariatur',
));
$wp_customize->add_control('footer-description', array(
	'label'      => 'Description',
	'section'    => 'footer-section',
	'settings'   => 'footer-description',
	'type' => 'textarea'
));

}
add_action( 'customize_register', 'olymptus_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function olymptus_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function olymptus_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function olymptus_customize_preview_js() {
	wp_enqueue_script( 'olymptus-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'olymptus_customize_preview_js' );

