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
                'title'         => $post->post_title,
                'text'          => $post->post_excerpt,
                'thumbnail'     => $thumbnail[0],
                'fase'          => get_post_meta($id,'fase',true) ,
                'jaar'          => get_post_meta($id,'jaar',true) ,
                'opdrachtgever' => get_post_meta($id,'opdrachtgever',true) ,
                'trekker'       => get_post_meta($id,'trekker',true) ,
                'quote'         => get_post_meta($id,'quote',true) ,
            );  
            array_push($slides,$slide);
            
        }
        $js     = plugins_url('/js/unslider.js', dirname(__FILE__) );
        $css    = plugins_url('/css/snslider.css', dirname(__FILE__) );
        include(sprintf("%s/templates/snslider.php", dirname(dirname(__FILE__))));
        die();
    }

}

