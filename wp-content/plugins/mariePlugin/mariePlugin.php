<?php
/*
Plugin Name: mariePlugin
Plugin URI: http://mariePlugin.com
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 0.1
Author: Thielens Marie
Author URI: http://www.thielens-marie.be
License: GPL2
*/






class MariePlugin
{
    public function __construct()
    {
        // Va me chercher me fichier pageTitle
        include_once plugin_dir_path( __FILE__ ).'/pageTitle.php';
        // Dans ce fichier prend moi la classe
        new MariePlugin_Page_Title(); 

        include_once plugin_dir_path( __FILE__). '/newsletterwidget.php';
        new Marie_Newsletter_Widget(); 

        include_once plugin_dir_path( __FILE__). '/contactUs.php';
        new Marie_ContactUs_Widget(); 

        include_once plugin_dir_path( __FILE__). '/flickr.php';
        new Marie_flickr_widget(); 

        include_once plugin_dir_path( __FILE__). '/twitterwidget.php';
        new Twitter_widget(); 
    }
}
new MariePlugin();
