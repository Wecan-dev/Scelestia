<?php
  /////About
  
  $wp_customize->add_section('about', array (
    'title' => 'Acerca de Nosotros',
    'panel' => 'panel1'
  ));
  
  $wp_customize->add_setting('about_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about_title_control', array (
    'description' => 'Título',
    'section' => 'about',
    'settings' => 'about_title',
  )));

  $wp_customize->add_setting('about_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about_subtitle_control', array (
    'description' => 'Subtítulo',
    'section' => 'about',
    'settings' => 'about_subtitle',
  )));

$wp_customize->add_setting('about_image1', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image1_control', array (
    'description' => 'Imagen 1',
    'section' => 'about',
    'settings' => 'about_image1',
  )));  

  $wp_customize->add_setting('about_image2', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image2_control', array (
    'description' => 'Imagen 2',
    'section' => 'about',
    'settings' => 'about_image2',
  ))); 

  $wp_customize->add_setting('about_image3', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image3_control', array (
    'description' => 'Imagen 3',
    'section' => 'about',
    'settings' => 'about_image3',
  )));  

  $wp_customize->add_setting('about_description', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about_description_control', array (
    'description' => 'Descripción',
    'section' => 'about',
    'settings' => 'about_description',
    'type' => 'textarea'
  )));  


  $wp_customize->add_setting('about_buttom', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about_buttom_control', array (
    'description' => 'Botón',
    'section' => 'about',
    'settings' => 'about_buttom',
  )));

  $wp_customize->add_setting('about_urlbuttom', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about_urlbuttom_control', array (
    'description' => 'Url Botón',
    'section' => 'about',
    'settings' => 'about_urlbuttom',
  )));      

  
?>