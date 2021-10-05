<?php

/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if (class_exists('WooCommerce')) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if (class_exists('Jetpack')) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ($understrap_includes as $file) {
	require_once get_theme_file_path($understrap_inc_dir . $file);
}

// Custom Function Starts Now

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


// ----------------------------- Add link class in wp_nav_menu -----------------------------
function add_menu_link_class($atts, $item, $args)
{
	if (property_exists($args, 'link_class')) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

//  Remove all possible fields for checkout option
function wc_remove_checkout_fields($fields)
{
	// Billing fields
	unset($fields['billing']['billing_company']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_state']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['billing']['billing_country']);

	// Shipping fields
	unset($fields['shipping']['shipping_company']);
	unset($fields['shipping']['shipping_phone']);
	unset($fields['shipping']['shipping_state']);
	unset($fields['shipping']['shipping_first_name']);
	unset($fields['shipping']['shipping_last_name']);
	unset($fields['shipping']['shipping_address_1']);
	unset($fields['shipping']['shipping_address_2']);
	unset($fields['shipping']['shipping_city']);
	unset($fields['shipping']['shipping_postcode']);

	return $fields;
}
add_filter('woocommerce_checkout_fields', 'wc_remove_checkout_fields');

// For the User Icon in account page jugad

add_filter('nav_menu_link_attributes', 'wpse121123_contact_menu_atts', 10, 3);
function wpse121123_contact_menu_atts($atts, $item, $args)
{
	// The ID of the target menu item
	$menu_target = 78;

	// inspect $item
	if ($item->ID == $menu_target) {
		$atts['uk-icon'] = 'user';
	}
	return $atts;
}

// Remove the product description Title
add_filter('woocommerce_product_description_heading', '__return_null');

/**
 * Remove product data tabs
 */
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

function woo_remove_product_tabs($tabs)
{

	unset($tabs['additional_information']);  	// Remove the additional information tab

	return $tabs;
}

/**
 * @snippet       Add First & Last Name to My Account Register Form - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WC 3.9
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

///////////////////////////////
// 1. ADD FIELDS

add_action('woocommerce_register_form_start', 'bbloomer_add_name_woo_account_registration');

function bbloomer_add_name_woo_account_registration()
{
?>

	<p class="form-row form-row-first">
		<label for="reg_billing_first_name"><?php _e('First name', 'woocommerce'); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if (!empty($_POST['billing_first_name'])) esc_attr_e($_POST['billing_first_name']); ?>" />
	</p>

	<p class="form-row form-row-last">
		<label for="reg_billing_last_name"><?php _e('Last name', 'woocommerce'); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if (!empty($_POST['billing_last_name'])) esc_attr_e($_POST['billing_last_name']); ?>" />
	</p>
	<p class="form-row form-row-wide">
		<label for="reg_billing_phone"><?php _e('Phone', 'woocommerce'); ?><span class="required">*</span></label>
		<input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php esc_attr_e($_POST['billing_phone']); ?>" />
	</p>

<?php
}

///////////////////////////////
// 2. VALIDATE FIELDS

add_filter('woocommerce_registration_errors', 'bbloomer_validate_name_fields', 10, 3);

function bbloomer_validate_name_fields($errors, $username, $email)
{
	if (isset($_POST['billing_first_name']) && empty($_POST['billing_first_name'])) {
		$errors->add('billing_first_name_error', __('<strong>Error</strong>: First name is required!', 'woocommerce'));
	}
	if (isset($_POST['billing_last_name']) && empty($_POST['billing_last_name'])) {
		$errors->add('billing_last_name_error', __('<strong>Error</strong>: Last name is required!.', 'woocommerce'));
	}
	return $errors;
}

///////////////////////////////
// 3. SAVE FIELDS

add_action('woocommerce_created_customer', 'bbloomer_save_name_fields');

function bbloomer_save_name_fields($customer_id)
{
	if (isset($_POST['billing_first_name'])) {
		update_user_meta($customer_id, 'billing_first_name', sanitize_text_field($_POST['billing_first_name']));
		update_user_meta($customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']));
	}
	if (isset($_POST['billing_last_name'])) {
		update_user_meta($customer_id, 'billing_last_name', sanitize_text_field($_POST['billing_last_name']));
		update_user_meta($customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']));
	}
	if (isset($_POST['billing_phone'])) {
		// Phone input filed which is used in WooCommerce
		update_user_meta($customer_id, 'billing_phone', sanitize_text_field($_POST['billing_phone']));
	}
}
