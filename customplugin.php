<?php 
/**
 * Plugin Name:      Custom Plugin
 * Version:          0.1.6
 * Description:      Custom Plugin
 * Author:           Veesibility
 * GitHub Plugin URI: https://github.com/Veesibility-test/customplugin
 */
add_action( 'ava_before_bottom_main_menu', 'vee_secondary_header' );
  function vee_secondary_header() {	
    echo 'test';
  }
