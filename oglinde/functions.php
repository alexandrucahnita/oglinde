<?php
//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'WPCF7_AUTOP', 'wpautop' );
add_filter( 'wpcf7_form_class_attr', 'your_custom_form_class_attr' );
function your_custom_form_class_attr( $class ) {
	$class .= ' form-horizontal';
	return $class;
}
//register menus
// if ( function_exists( 'register_nav_menu' ) ) {
// 	register_nav_menu( 'main-menu', 'menu1' );
// }




function register_my_menus() {
  register_nav_menus(
    array(
      'menu1' => __( 'menu 1' ),
      'menu2' => __( 'menu 2' ),
      'menu3' => __( 'menu 3' ),
      'menu4' => __( 'menu 4' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


//extend menu
// Removes div class from wp_nav_menu
function remove_div ( $menu ){
    return preg_replace( array( '#^<div[^>]*>#', '#</div>$#' ), '', $menu );

}
add_filter( 'wp_nav_menu', 'remove_div' );

function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );

}
add_filter( 'wp_nav_menu', 'remove_ul' );



//end
?>