<?php
/**
 * displaying footer wrapper section
 *
 * @package H-Code
 */
?>
<?php
$hcode_options = get_option( 'hcode_theme_setting' );
$enable_footer_wrapper = hcode_option('hcode_enable_footer_wrapper');

$enable_phone_number 	= hcode_option('hcode_footer_wrapper_enable_phone_number');
$custom_phone_icon 		= ( isset($hcode_options['hcode_footer_wrapper_custom_phone_icon'])) ? $hcode_options['hcode_footer_wrapper_custom_phone_icon'] : '';
$phone_icon 			= ( isset($hcode_options['hcode_footer_wrapper_phone_icon'])) ? $hcode_options['hcode_footer_wrapper_phone_icon'] : '';
$custom_phone_icon_image= ( isset($hcode_options['hcode_footer_wrapper_custom_phone_icon_image']['url'])) ? $hcode_options['hcode_footer_wrapper_custom_phone_icon_image']['url'] : '';
$phone_text 			= ( isset($hcode_options['hcode_footer_wrapper_phone_text'])) ? $hcode_options['hcode_footer_wrapper_phone_text'] : '';

$enable_map 			= hcode_option('hcode_footer_wrapper_enable_map');
$custom_map_icon 		= ( isset($hcode_options['hcode_footer_wrapper_custom_map_icon'])) ? $hcode_options['hcode_footer_wrapper_custom_map_icon'] : '';
$map_icon 				= ( isset($hcode_options['hcode_footer_map_icon'])) ? $hcode_options['hcode_footer_map_icon'] : '';
$custom_map_icon_image 	= ( isset($hcode_options['hcode_footer_wrapper_custom_map_icon_image']['url'])) ? $hcode_options['hcode_footer_wrapper_custom_map_icon_image']['url'] : '';
$map_text 				= ( isset($hcode_options['hcode_footer_wrapper_map_text'])) ? $hcode_options['hcode_footer_wrapper_map_text'] : '';

$enable_email 			= hcode_option('hcode_footer_wrapper_enable_email');
$custom_email_icon 		= ( isset($hcode_options['hcode_footer_wrapper_custom_email_icon'])) ? $hcode_options['hcode_footer_wrapper_custom_email_icon'] : '';
$email_icon 			= ( isset($hcode_options['hcode_footer_wrapper_email_icon'])) ? $hcode_options['hcode_footer_wrapper_email_icon'] : '';
$custom_email_icon_image= ( isset($hcode_options['hcode_footer_wrapper_custom_email_icon_image']['url'])) ? $hcode_options['hcode_footer_wrapper_custom_email_icon_image']['url'] : '';
$email_text				= ( isset($hcode_options['hcode_footer_wrapper_email_id'])) ? $hcode_options['hcode_footer_wrapper_email_id'] : '';

$output='';
if( $enable_footer_wrapper == 1 && ( $enable_phone_number == 1 || $enable_map == 1 || $enable_email == 1 ) ){
	
	$col_counter = 0;
	$col_counter = $enable_phone_number == 1 ? ++$col_counter : $col_counter;
	$col_counter = $enable_map == 1 ? ++$col_counter : $col_counter;
	$col_counter = $enable_email == 1 ? ++$col_counter : $col_counter;

	$col_size	 = 12 / $col_counter;

	$output .='<div class=" bg-white footer-top">';
		$output .='<div class="container">';
		    $output .='<div class="row margin-four">';
		    	if( $enable_phone_number == 1 ) {
			        $output .='<div class="col-md-' . $col_size . ' col-sm-' . $col_size . ' text-center">';
			        	if( $custom_phone_icon == 1 && !empty( $custom_phone_icon_image ) ) {
			        		$output .= '<img src="' . $custom_phone_icon_image . '" alt="" />';
			        	} elseif( empty( $custom_phone_icon ) && !empty( $phone_icon ) ) {
					        $output .='<i class="'.$phone_icon.' small-icon black-text"></i>';
					    }
					    if( !empty( $phone_text ) ) {
					        $output .='<h6 class="black-text margin-two no-margin-bottom">';
					       		$output .= nl2br( $phone_text );
					        $output .='</h6>';
					    }
			        $output .='</div>';
		    	}
		    	if( $enable_map == 1 ) {
			        $output .='<div class="col-md-' . $col_size . ' col-sm-' . $col_size . ' text-center">';
			        	if( $custom_map_icon == 1 && !empty( $custom_map_icon_image ) ) {
			        		$output .= '<img src="' . $custom_map_icon_image . '" alt="" />';
			        	} elseif( empty( $custom_map_icon ) && !empty( $map_icon ) ) {
					        $output .='<i class="'.$map_icon.' small-icon black-text"></i>';
					    }
					    if( !empty( $map_text ) ) {
					        $output .='<h6 class="black-text margin-two no-margin-bottom">';
					       		$output .= nl2br( $map_text );
					        $output .='</h6>';
					    }
			        $output .='</div>';
		    	}
		    	if( $enable_email == 1 ) {
			        $output .='<div class="col-md-' . $col_size . ' col-sm-' . $col_size . ' text-center">';
			        	if( $custom_email_icon == 1 && !empty( $custom_email_icon_image ) ) {
			        		$output .= '<img src="' . $custom_email_icon_image . '" alt="" />';
			        	} elseif( empty( $custom_email_icon ) ) {
					        $output .='<i class="'.$email_icon.' small-icon black-text"></i>';
					    }
					    if( !empty( $email_text ) ) {
					        $output .='<h6 class="margin-two no-margin-bottom">';
					        	$pos = strpos($email_text, 'a href');
					        	if ($pos === false) {
								    $output .= '<a href="mailto:' . $email_text . '">' . $email_text . '</a>';
								} else {
									$output .= nl2br( $email_text );
								}
					        $output .='</h6>';
					    }
			        $output .='</div>';
		    	}
		    $output .='</div>';
		$output .='</div>';
	$output .='</div>';

	echo $output;
}
?>