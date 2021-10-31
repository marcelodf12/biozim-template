
<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    //wp_enqueue_style( 'skel', get_template_directory_uri() . '/css/skel-noscript.css', array(), '1.1', 'all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style( 'desktop', get_template_directory_uri() . '/css/style-desktop.css', array(), '1.1', 'all');
    
    wp_enqueue_script( 'skelmin', get_template_directory_uri() . '/js/skel.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'skelpanels', get_template_directory_uri() . '/js/skel-panels.min.js', array ( 'skelmin' ), 1.1, true);
    wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.js', array ( 'skelpanels' ), 1.1, true);
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js', array ( 'init' ), 1.1, true);
    
    
      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
  }

if(function_exists('register_nav_menus')){
    register_nav_menus(array('principal'=>'Menú Principal'));
}

add_filter('nav_menu_link_attributes', 'clase_menu', 10, 3);

function clase_menu($atts, $item, $args){
    if($atts['aria-current']=='page'){
        $class = 'active';
        $atts['class'] = $class;
    }
    return $atts;
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
  
