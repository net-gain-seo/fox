<?php
function my_theme_enqueue_styles() {

    $parent_style = 'ns_main';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/main.css' );
    wp_enqueue_style( 'child_main',
        get_stylesheet_directory_uri() . '/main.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style( 'Lato', 'https://fonts.googleapis.com/css?family=Lato:400,700' );
    wp_enqueue_style('OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans');


}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function ns_child_scripts() {

    //wp_enqueue_script( 'child-custom', get_bloginfo('template_url') . '/js/custom.js', 'jquery', '1.6.0', true );

}
add_action( 'wp_enqueue_scripts', 'ns_child_scripts' );


?>
