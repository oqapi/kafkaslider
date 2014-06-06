<?php
/**
 * @package Snslider
 * @version 1.6
 */
/*
Plugin Name: snslider
Plugin URI: http://unitedknowledge.nl
Description: Slider plugin voor de Slimmernetwerken van Kafkabrigade
Author: Joeri de Bruin
Version: 0.9
Author URI: http://www.unitedknowledge.nl/
*/

if(!class_exists('snslider'))
{
    class snslider
    {
        /**
         * Construct the plugin object
         */
        public function __construct()
        {
            // register actions
            include('admin/snslider_admin_functions.php');
            add_action('admin_head', 'insert_snslider_admin_css');
            add_action('admin_menu', 'snslider_admin_actions');

            // Register custom post types
            require_once(sprintf("%s/post-types/slimmernetwerken_post.php", dirname(__FILE__)));
            $Post_Type_SN = new Post_Type_SN();
            
            $plugin = plugin_basename(__FILE__);
            add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));
            
            include('user/snslider_user_functions.php');
            if(class_exists('snslider_user'))
            {
                // instantiate the plugin class
                $snslider_user = new snslider_user();
            }

            
        } // END public function __construct

        /**
         * Activate the plugin
         */
        public static function activate()
        {
            // Do nothing
        } // END public static function activate

        /**
         * Deactivate the plugin
         */     
        public static function deactivate()
        {
            // Do nothing
        } // END public static function deactivate
        
        // Add the settings link to the plugins page
        function plugin_settings_link($links)
        {
            $settings_link = '<a href="options-general.php?page=Slimmernetwerk">Settings</a>';
            array_unshift($links, $settings_link);
            return $links;
        }
    } // END class WP_Plugin_Template
} // END if(!class_exists('WP_Plugin_Template'))

if(class_exists('snslider'))
{
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('snslider', 'activate'));
    register_deactivation_hook(__FILE__, array('snslider', 'deactivate'));

    // instantiate the plugin class
    $snslider = new snslider();
}

 

    


?>
