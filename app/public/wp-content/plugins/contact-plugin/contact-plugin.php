<?php

/* 
Plugin Name: Contact Plugin
Description: This is a description of my plugin.
Version: 1.0
Author: Sasa Ostojic
*/

// If we access plugin directory thorugh url this will execute
if(!defined('ABSPATH')){
    die('You cannot be here!');
}


if(!class_exists('ContactPlugin')){

    class ContactPlugin{
        public function __construct(){
            //defining constant for saving our time typing same path all the time
            define('MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
            define('MY_PLUGIN_URL', plugin_dir_url( __FILE__ ));
            // We are instantiating plugin
            require_once( MY_PLUGIN_PATH . '/vendor/autoload.php');
        }

        public function initialize(){
            include_once(MY_PLUGIN_PATH . '/includes/utilities.php');
            include_once(MY_PLUGIN_PATH . '/includes/options-page.php');
            include_once(MY_PLUGIN_PATH . '/includes/contact-form.php');
        }
    }

    $contact_plugin = new ContactPlugin;
    $contact_plugin->initialize();
}



?>