<?php
/*
Plugin Name: YouTube Subs Display 
Plugin URI: https://homeandedibles.com/taofeeq-masud-portfolio/
Description: Display YouTube Channel name, Subs Count and logo and Channel's logo by the widget.
Version: 1.0
Author: Taofeeq Mas'ud
Author URI: https://homeandedibles.com/taofeeq-masud-portfolio/
Text Domain: youtube-subs-display
Domain Path: /languages
*/



// Exit if access directory

if(!defined('ABSPATH')){
    exit;
}

// load scripts file
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-script.php');

// Load Class 
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');


// to Register the Widget Class file

function register_youtubesubs(){
    register_widget('Youtube_Subs_Widget');
}

// Hook in Function

add_action ('widget_init', 'register_youtubesubs');