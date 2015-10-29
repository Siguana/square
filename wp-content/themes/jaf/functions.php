<?php

function wd_load_script() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_register_script('carousel', get_template_directory_uri() . '/js/javascript.js', 'jquery');

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'carousel' );
}    

add_action('wp_enqueue_scripts', 'wd_load_script');

if ( function_exists( 'register_nav_menus' ) ){
	register_nav_menus(
		array(
	    	'MainMenu' => __( 'Main Menu' ),
	    )
	);
}

function jaf_widgets_init() {

	register_sidebar( array(
		'name'          => 'Translator',
		'id'            => 'translator',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'jaf_widgets_init' );

add_filter( 'query_vars', 'addnew_query_vars', 10, 1 );
function addnew_query_vars($vars){   
    $vars[] = 'house';
    return $vars;
}
?>