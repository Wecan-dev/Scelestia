<?php
  /////Colecciones
  
  $wp_customize->add_section('colecciones', array (
    'title' => 'Colecciones',
    'panel' => 'panel1'
  ));
  

  
  $wp_customize->add_setting('colecciones_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'colecciones_title_control', array (
    'description' => 'Título',
    'section' => 'colecciones',
    'settings' => 'colecciones_title',
  )));

  $wp_customize->add_setting('colecciones_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'colecciones_subtitle_control', array (
    'description' => 'Subtítulo',
    'section' => 'colecciones',
    'settings' => 'colecciones_subtitle',
  )));


  
?>