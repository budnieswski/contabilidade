<?php

if ( ! class_exists( 'Timber' ) ) {
  add_action( 'admin_notices', function() {
    echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
  } );
  return;
}

require(dirname(__FILE__).'/core/taraven.php');
Class MyTheme extends Taraven {
  
  function __construct() {

    $settings = array(
      'css' => array('main.css'),
      'js' => array(
        'wpexLocalize.min.js',
        'main.min.js',
        'js_composer_front.min.js',
        ),
      'menu' => array('Header'),
      'acf' => array('Site'),
      'blog' => false,
    );
    
    // Taraven construct
    parent::__construct($settings);
  }

}

new MyTheme();

require(dirname(__FILE__).'/model/functions-custom.php');
