<?php
  /////Comoda
  
  $wp_customize->add_section('comoda', array (
    'title' => 'Comoda',
    'panel' => 'panel1'
  ));
  

  
  $wp_customize->add_setting('comoda_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'comoda_title_control', array (
    'description' => 'Título',
    'section' => 'comoda',
    'settings' => 'comoda_title',
  )));

  $wp_customize->add_setting('comoda_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'comoda_subtitle_control', array (
    'description' => 'Subtítulo',
    'section' => 'comoda',
    'settings' => 'comoda_subtitle',
  )));

  $wp_customize->add_setting('comoda_description', array(
    'default' => ''
  ));
  

  $wp_customize->add_setting('comoda_image');

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'comoda_image_control', array (
    'description' => 'Imagen',
    'section' => 'comoda',
      'settings' => 'comoda_image'
  )));

  
?>