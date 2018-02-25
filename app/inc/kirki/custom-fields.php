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
}
