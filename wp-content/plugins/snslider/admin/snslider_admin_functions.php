<?php

function snslider_admin(){
    register_snslider_admin_style();
    register_snslider_admin_colorpicker_script();
    insert_snslider_admin_css();
    include(plugin_dir_path(dirname(__FILE__)) . 'admin/snslider_admin.php');    
}

function snslider_admin_actions() {
    add_options_page("Slimmernetwerken", "Slimmernetwerken", 1, "Slimmernetwerken", "snslider_admin");
}


// enqueue admin CSS if we are on the plugin options page
// also load built-in color picker
function insert_snslider_admin_css() {
    global $pagenow;
    if (($_GET['page'] === 'Slimmernetwerken') && ($pagenow === 'options-general.php')) {
            wp_enqueue_style('snslider_admin_style');
            wp_enqueue_script('snslider_add_colorpicker');
            wp_enqueue_style('wp-color-picker');
            wp_enqueue_script('wp-color-picker');
    }

}

function register_snslider_admin_style() {
    wp_register_style('snslider_admin_style',
            plugins_url( '/css/admin.css'),
            array(),
            "snslider_" . date('njYHis', filemtime(plugin_dir_path(dirname(__FILE__)) . '/css/admin.css')), 
            'all');
}

function register_snslider_admin_colorpicker_script() {
    wp_register_script('snslider_add_colorpicker',
            plugins_url('/js/snslider-color-picker.js', dirname(__FILE__) ), 
            array(), 
            "snslider_" . date('njYHis', filemtime(plugin_dir_path(dirname(__FILE__)) . '/js/snslider-color-picker.js')), 
            true);
}



