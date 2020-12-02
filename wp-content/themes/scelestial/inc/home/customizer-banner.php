<?php
  /////Banner

  $wp_customize->add_section('banner', array (
    'title' => 'Banner',
    'panel' => 'panel1'
  ));
  
  $wp_customize->add_setting('banner_message', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_message_control', array (
    'label' => 'Add Items Banner ',
    'description' => 'Clic <a href="edit.php?post_type=itemsbanner">aquì</a> par agregar items',
    'section' => 'banner',
    'settings' => 'banner_message',
    'type' => 'hidden',
  )));

  
?>