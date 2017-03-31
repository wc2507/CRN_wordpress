<?php
/**
 * Login form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( is_user_logged_in() ) {
	return;
}

?>
<form method="post" class="login display-block" <?php if ( $hidden ) echo 'style="display:none;"'; ?>>

	<?php do_action( 'woocommerce_login_form_start' ); ?>

	<?php if ( $message ) echo wpautop( wptexturize( $message ) ); ?>
	<ul>
	<li class="form-row form-row-first">
		<label for="username"><?php esc_html_e( 'Username or email', 'woocommerce' ); ?> <em class="required">*</em></label>
		<input type="text" class="input-text" name="username" id="username" />
	</li>
	<li class="form-row form-row-last">
		<label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <em class="required">*</em></label>
		<input class="input-text" type="password" name="password" id="password" />
	</li>


	<?php do_action( 'woocommerce_login_form' ); ?>

	<li class="form-row clear">
		<?php wp_nonce_field( 'woocommerce-login' ); ?>
		<input type="submit" class="button btn btn-black no-margin-bottom btn-small" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
		<input type="hidden" name="redirect" value="<?php echo esc_url( $redirect ) ?>" />
		<label for="rememberme" class="inline">
			<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php esc_html_e( 'Remember me', 'woocommerce' ); ?>
		</label>
		<p class="lost_password">
			<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
		</p>
	</li>
	</ul>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_login_form_end' ); ?>

</form>
