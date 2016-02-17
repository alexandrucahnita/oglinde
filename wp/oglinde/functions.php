<?php
// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );
// remove_filter( 'WPCF7_AUTOP', 'wpautop' );
add_filter( 'wpcf7_form_class_attr', 'your_custom_form_class_attr' );
function your_custom_form_class_attr( $class ) {
	$class .= ' form-horizontal';
	return $class;
}?>