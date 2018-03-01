<?php

if(class_exists('Kirki')) {
  Kirki::add_config( 'groundwork_kirki_config', array(
  	'capability'    => 'edit_theme_options',
  	'option_type'   => 'theme_mod',
  ) );

  /***********************************************************
  * Social media fields
  ************************************************************/
  Kirki::add_section( 'social_media', array(
      'title'          => __( 'Social Media' ),
      'description'    => __( 'Enter your social media account URLs', 'groundwork' ),
      'panel'          => '', // Not typically needed.
      'priority'       => 20,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '', // Rarely needed.
  ) );

  Kirki::add_field( 'groundwork_kirki_config', array(
  	'type'     => 'text',
  	'settings' => 'facebook_account',
  	'label'    => __( 'Facebook account URL', 'groundwork' ),
  	'section'  => 'social_media',
  	'default'  => esc_attr__( '', 'groundwork' ),
  	'priority' => 10,
  ) );

  Kirki::add_field( 'groundwork_kirki_config', array(
    'type'     => 'text',
    'settings' => 'twitter_account',
    'label'    => __( 'Twitter account URL', 'groundwork' ),
    'section'  => 'social_media',
    'default'  => esc_attr__( '', 'groundwork' ),
    'priority' => 10,
  ) );

  Kirki::add_field( 'groundwork_kirki_config', array(
    'type'     => 'text',
    'settings' => 'instagram_account',
    'label'    => __( 'Instagram account URL', 'groundwork' ),
    'section'  => 'social_media',
    'default'  => esc_attr__( '', 'groundwork' ),
    'priority' => 10,
  ) );

  Kirki::add_field( 'groundwork_kirki_config', array(
    'type'     => 'text',
    'settings' => 'pinterest_account',
    'label'    => __( 'Pinterest account URL', 'groundwork' ),
    'section'  => 'social_media',
    'default'  => esc_attr__( '', 'groundwork' ),
    'priority' => 10,
  ) );

  /***********************************************************
  * Store hours fields
  ************************************************************/
  Kirki::add_section( 'store_hours', array(
    'title'          => __( 'Store Hours' ),
    'description'    => __( 'Enter the store hours you would like to display on the site', 'groundwork' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'groundwork_kirki_config', array(
  'type'     => 'text',
  'settings' => 'monday_hours',
  'label'    => __( 'Monday', 'groundwork' ),
  'section'  => 'store_hours',
  'default'  => esc_attr__( '', 'groundwork' ),
  'priority' => 10,
) );

Kirki::add_field( 'groundwork_kirki_config', array(
  'type'     => 'text',
  'settings' => 'tuesday_hours',
  'label'    => __( 'Tuesday', 'groundwork' ),
  'section'  => 'store_hours',
  'default'  => esc_attr__( '', 'groundwork' ),
  'priority' => 10,
) );

Kirki::add_field( 'groundwork_kirki_config', array(
  'type'     => 'text',
  'settings' => 'wednesday_hours',
  'label'    => __( 'Wednesday', 'groundwork' ),
  'section'  => 'store_hours',
  'default'  => esc_attr__( '', 'groundwork' ),
  'priority' => 10,
) );

Kirki::add_field( 'groundwork_kirki_config', array(
  'type'     => 'text',
  'settings' => 'thursday_hours',
  'label'    => __( 'Thursday', 'groundwork' ),
  'section'  => 'store_hours',
  'default'  => esc_attr__( '', 'groundwork' ),
  'priority' => 10,
) );

Kirki::add_field( 'groundwork_kirki_config', array(
  'type'     => 'text',
  'settings' => 'friday_hours',
  'label'    => __( 'Friday', 'groundwork' ),
  'section'  => 'store_hours',
  'default'  => esc_attr__( '', 'groundwork' ),
  'priority' => 10,
) );

Kirki::add_field( 'groundwork_kirki_config', array(
  'type'     => 'text',
  'settings' => 'saturday_hours',
  'label'    => __( 'Saturday', 'groundwork' ),
  'section'  => 'store_hours',
  'default'  => esc_attr__( '', 'groundwork' ),
  'priority' => 10,
) );

Kirki::add_field( 'groundwork_kirki_config', array(
  'type'     => 'text',
  'settings' => 'sunday_hours',
  'label'    => __( 'Sunday', 'groundwork' ),
  'section'  => 'store_hours',
  'default'  => esc_attr__( '', 'groundwork' ),
  'priority' => 10,
) );


/***********************************************************
  * Business info fields
  ************************************************************/
  Kirki::add_section( 'business_info', array(
    'title'          => __( 'Business Info' ),
    'description'    => __( 'Basic business info', 'groundwork' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'groundwork_kirki_config', array(
  'type'     => 'text',
  'settings' => 'phone_number',
  'label'    => __( 'Phone number', 'groundwork' ),
  'section'  => 'business_info',
  'default'  => esc_attr__( '', 'groundwork' ),
  'priority' => 10,
) );
}
