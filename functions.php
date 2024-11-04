<?php

// Activer les images a la une sur tous les types de contenu 

add_theme_support('post-thumbnails');
add_theme_support( 'custom-header' );


// Enlever la hauteur et la largeur des images injectées dans WordPress
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}