<?php
  /////Asesora
  
  $wp_customize->add_section('asesora', array (
    'title' => 'Asesora',
    'panel' => 'panel1'
  ));
  
  $wp_customize->add_setting('asesora_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'asesora_title_control', array (
    'description' => 'Título',
    'section' => 'asesora',
    'settings' => 'asesora_title',
  )));

  $wp_customize->add_setting('asesora_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'asesora_subtitle_control', array (
    'description' => 'Subtítulo',
    'section' => 'asesora',
    'settings' => 'asesora_subtitle',
  )));

  $wp_customize->add_setting('asesora_description', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'asesora_description_control', array (
    'description' => 'Descripción',
    'section' => 'asesora',
    'settings' => 'asesora_description',
    'type' => 'textarea'
  )));  


  $wp_customize->add_setting('asesora_buttom', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'asesora_buttom_control', array (
    'description' => 'Botón',
    'section' => 'asesora',
    'settings' => 'asesora_buttom',
  )));

  $wp_customize->add_setting('asesora_urlbuttom', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'asesora_urlbuttom_control', array (
    'description' => 'Url Botón',
    'section' => 'asesora',
    'settings' => 'asesora_urlbuttom',
  )));
  
  $wp_customize->add_setting('asesora_image1', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'asesora_image1_control', array (
    'description' => 'Imagen 1',
    'section' => 'asesora',
    'settings' => 'asesora_image1',
  )));  

  $wp_customize->add_setting('asesora_image2', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'asesora_image2_control', array (
    'description' => 'Imagen 2',
    'section' => 'asesora',
    'settings' => 'asesora_image2',
  ))); 

  $wp_customize->add_setting('asesora_image3', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'asesora_image3_control', array (
    'description' => 'Imagen 3',
    'section' => 'asesora',
    'settings' => 'asesora_image3',
  )));     

  $wp_customize->add_setting('asesora_title_izq', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'asesora_title_izq_control', array (
    'description' => 'Título Izq',
    'section' => 'asesora',
    'settings' => 'asesora_title_izq',
  )));

  $wp_customize->add_setting('asesora_title_der', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'asesora_title_der_control', array (
    'description' => 'Título Der',
    'section' => 'asesora',
    'settings' => 'asesora_title_der',
  )));
  
?>