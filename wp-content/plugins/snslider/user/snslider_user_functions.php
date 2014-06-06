<?php        
        
class snslider_user {
    
    public function __construct() {
        add_action( 'init', array( $this, 'snslider_action' ) );
//        echo 'dfsdf';
    }
    
    public function snslider_action( $url = false ) {
        if ( empty( $_REQUEST['snslider'] ) || ! is_numeric( $_REQUEST['snslider'] ) ) {
                return;
        }
        
        $args = array(
            'post_type' => 'slider_post',
        ); 
        $slides = Array();
        $posts = get_posts($args); 
        foreach($posts as $post){
            $id = $post->ID;
            $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($id), array(300, 300), false, '');
        
            $slide = array(
                'title'                 => $post->post_title,
                'text'                  => $post->post_excerpt,
                'thumbnail'             => $thumbnail[0],
                'fase_verbreden'        => get_post_meta($id,'fase_verbreden',true) ,
                'fase_evalueren'        => get_post_meta($id,'fase_evalueren',true) ,
                'fase_experimenteren'   => get_post_meta($id,'fase_experimenteren',true) ,
                'fase_adopteren'        => get_post_meta($id,'fase_adopteren',true) ,
                'fase_schetsen'         => get_post_meta($id,'fase_schetsen',true) ,
                'fase_initieren'        => get_post_meta($id,'fase_initieren',true) ,
                'jaar'                  => get_post_meta($id,'jaar',true) ,
                'opdrachtgever'         => get_post_meta($id,'opdrachtgever',true) ,
                'trekker'               => get_post_meta($id,'trekker',true) ,
                'quote'                 => get_post_meta($id,'quote',true) ,
            );  
            array_push($slides,$slide);
            
        }
        $js         = plugins_url('/js/unslider.js', dirname(__FILE__) );
        $snsliderjs         = plugins_url('/js/snslider.js', dirname(__FILE__) );
        $modernizr   = plugins_url('/js/modernizr.custom.79639.js', dirname(__FILE__) );
        $css        = plugins_url('/css/snslider.css', dirname(__FILE__) );
        $stylecss        = plugins_url('/css/style.css', dirname(__FILE__) );
        
        $nojscss        = plugins_url('/css/noJS.css', dirname(__FILE__) );
        
        
        include(sprintf("%s/templates/snslider.php", dirname(dirname(__FILE__))));
        die();
    }

}

