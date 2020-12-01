<?php
  /////Banner

  $wp_customize->add_section('banner', array (
    'title' => 'Banner',
    'panel' => 'panel1'
  ));
  
for ($i=1; $i <= 3 ; $i++) {  

  $wp_customize->add_setting('banner_title_'.$i.'', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_title_'.$i.'_control', array (
    'label' => 'Banner '.$i.'',
    'description' => 'Título',
    'section' => 'banner',
    'settings' => 'banner_title_'.$i.'',
  )));

  $wp_customize->add_setting('banner_description_'.$i.'', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_description_'.$i.'_control', array (
    'description' => 'Descripción 1',
    'section' => 'banner',
    'settings' => 'banner_description_'.$i.'',
  )));

  $wp_customize->add_setting('banner_description2_'.$i.'', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_description2_'.$i.'_control', array (
    'description' => 'Descripción 2',
    'section' => 'banner',
    'settings' => 'banner_description2_'.$i.'',
  )));

  $wp_customize->add_setting('banner_image_'.$i.'', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image_'.$i.'_control', array (
    'description' => 'Imagen',
    'section' => 'banner',
    'settings' => 'banner_image_'.$i.'',
  )));  
}  
?>