<?php
/**
 * wp-Lily Theme Customizer
 *
 * @package wp-Lily
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wp_lily_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'wp_lily_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'wp_lily_customize_partial_blogdescription',
		) );
	}

	//Showcase Section

	$wp_customize->add_section('showcase',array(
		'title' => __('Showcase','wp_lily'),
		'description' => sprintf(__('Options for showcase','wp_lily')),
		'priority' => 130
	));

	$wp_customize->add_setting('showcase_image',array(
		'default' => get_bloginfo('template_directory').'/assets/img/gebeya.jfif',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',array(
		'label' => __('Showcase Image','wp_lily'),
		'section'=>'showcase',
		'settings' => 'showcase_image',
		'priority' => 1
	)));

	$wp_customize->add_setting('showcase_heading',array(
		'default' => _X('Custom Bootstrap Wordpress Theme','wp_lily'),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('showcase_heading',array(
		'label' => __('Heading','wp_lily'),
		'section'=>'showcase',
		'priority'=>2
	));

	$wp_customize->add_setting('showcase_text',array(
		'default' => _X('Sociis natoque penatibus et marign dis parturient','wp_lily'),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('showcase_text',array(
		'label' => __('Text','wp_lily'),
		'section'=>'showcase',
		'priority'=>3
	));


	$wp_customize->add_setting('btn_url',array(
		'default' => _X('http://test.com','wp_lily'),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('btn_url',array(
		'label' => __('Button URL','wp_lily'),
		'section'=>'showcase',
		'priority'=>4
	));


	$wp_customize->add_setting('btn_text',array(
		'default' => _X('Read More','wp_lily'),
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('btn_text',array(
		'label' => __('Button Text','wp_lily'),
		'section'=>'showcase',
		'priority'=>5
	));
}
add_action( 'customize_register', 'wp_lily_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wp_lily_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wp_lily_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_lily_customize_preview_js() {
	wp_enqueue_script( 'wp-lily-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wp_lily_customize_preview_js' );
