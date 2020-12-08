 <?php
    //////////////SOCIAL NETWORKS 
  $wp_customize->add_section('social', array (
    'title' => 'Redes Sociales',
    'panel' => 'panel2'
  ));

  $wp_customize->add_setting('pinterest', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pinterest_control', array (
    'label' => 'Pinterest',
    'description' => 'Url',
    'section' => 'social',
    'settings' => 'pinterest'
  )));


  $wp_customize->add_setting('facebook', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook_control', array (
    'label' => 'Facebook',
    'description' => 'Url',
    'section' => 'social',
    'settings' => 'facebook'
  )));

  $wp_customize->add_setting('linkedin', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linkedin_control', array (
    'label' => 'Linkedin',
    'description' => 'Url',    
    'section' => 'social',
    'settings' => 'linkedin'
  ))); 


  $wp_customize->add_setting('instagram', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'instagram_control', array (
    'label' => 'Instagram',
    'description' => 'Url',
    'section' => 'social',
    'settings' => 'instagram'
  ))); 


  $wp_customize->add_setting('twitter', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'twitter_control', array (
    'label' => 'Twitter',
    'description' => 'Url',
    'section' => 'social',
    'settings' => 'twitter'
  ))); 


  $wp_customize->add_setting('vimeo', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'vimeo_control', array (
    'label' => 'Vimeo',
    'description' => 'Url',
    'section' => 'social',
    'settings' => 'vimeo'
  )));  


  $wp_customize->add_setting('youtube', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'youtube_control', array (
    'label' => 'Youtube',
    'description' => 'Url',
    'section' => 'social',
    'settings' => 'youtube'
  )));  


?>