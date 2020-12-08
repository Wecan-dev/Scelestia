<?php
  /////Descuento
  
  $wp_customize->add_section('descuento', array (
    'title' => 'Descuento',
    'panel' => 'panel1'
  ));
  
  $wp_customize->add_setting('descuento_buttom_firts', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descuento_buttom_firts_control', array (
    'description' => 'Botón Intermedio',
    'section' => 'descuento',
    'settings' => 'descuento_buttom_firts',
  )));

  $wp_customize->add_setting('descuento_urlbuttom_firts', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descuento_urlbuttom_firts_control', array (
    'description' => 'Url Botón Intermedio',
    'section' => 'descuento',
    'settings' => 'descuento_urlbuttom_firts',
  )));
  
  $wp_customize->add_setting('descuento_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descuento_title_control', array (
    'description' => 'Título',
    'section' => 'descuento',
    'settings' => 'descuento_title',
  )));

  $wp_customize->add_setting('descuento_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descuento_subtitle_control', array (
    'description' => 'Subtítulo',
    'section' => 'descuento',
    'settings' => 'descuento_subtitle',
  )));

  $wp_customize->add_setting('descuento_desciption', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descuento_desciption_control', array (
    'description' => 'Descripción',
    'section' => 'descuento',
    'settings' => 'descuento_desciption',
    'type' => 'textarea'
  )));  

  $wp_customize->add_setting('descuento_title_izq', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descuento_title_izq_control', array (
    'description' => 'Título Izq',
    'section' => 'descuento',
    'settings' => 'descuento_title_izq',
  )));

  $wp_customize->add_setting('descuento_title_der', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'descuento_title_der_control', array (
    'description' => 'Título Der',
    'section' => 'descuento',
    'settings' => 'descuento_title_der',
  )));
  
?>