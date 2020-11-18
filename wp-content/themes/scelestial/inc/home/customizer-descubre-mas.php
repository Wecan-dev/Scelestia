<?php
  /////Decubre m{as}
  
  $wp_customize->add_section('descubre-mas', array (
    'title' => 'Descubre más',
    'panel' => 'panel1'
  ));
  

  
  $wp_customize->add_setting('descubre_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descubre_title_control', array (
    'description' => 'Título',
    'section' => 'descubre-mas',
    'settings' => 'descubre_title',
  )));

  $wp_customize->add_setting('descubre_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descubre_subtitle_control', array (
    'description' => 'Subtítulo',
    'section' => 'descubre-mas',
    'settings' => 'descubre_subtitle',
  )));

  $wp_customize->add_setting('descubre_description', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descubre_description_control', array (
    'description' => 'Description',
    'section' => 'descubre-mas',
    'settings' => 'descubre_description',
    'type' => 'textarea',   
  )));

  $wp_customize->add_setting('descubre_buttom', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descubre_buttom_control', array (
    'description' => 'Botón',
    'section' => 'descubre-mas',
    'settings' => 'descubre_buttom',
  )));

  $wp_customize->add_setting('descubre_urlbuttom', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descubre_urlbuttom_control', array (
    'description' => 'Url Botón',
    'section' => 'descubre-mas',
    'settings' => 'descubre_urlbuttom',
  ))); 


  $wp_customize->add_setting('descubre_image');

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'descubre_image_control', array (
    'description' => 'Imagen',
    'section' => 'descubre-mas',
      'settings' => 'descubre_image'
  )));

  
?>