<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


?>
<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>


</div><!-- #page we need this extra closing tag here -->

<footer class="global-footer">
	<div class="uk-container uk-container-large ss-footer-top">
		<div class="uk-child-width-expand@s" uk-grid>
			<div>
				<div class="container left">
					<div class="ss-logo">
						<img src="<?php echo get_home_url(); ?>/wp-content/themes/sochyo-theme/img/logo.png" alt="">
					</div>
					<div class="ss-info">
						<p><span uk-icon="location"></span>
							New Baneshwor, Kathmandu Nepal</p>
						<p><span uk-icon="phone"></span>
							+977-984140545</p>
						<p><span uk-icon="mail"></span>
							sochyo@gmail.com</p>
					</div>
				</div>
			</div>
			<div>
				<div class="container middle">
					<h3>Pay Via</h3>
					<div class="ss-ewallet">
						<img src="./wp-content/themes/sochyo-theme/img/landing-1.jpg" alt="">
						<img src="./wp-content/themes/sochyo-theme/img/landing-1.jpg" alt="">
						<img src="./wp-content/themes/sochyo-theme/img/landing-1.jpg" alt="">
					</div>
				</div>
			</div>
			<div>
				<div class="container right">
					<h3>Connect with us</h3>
					<div class="ss-icons">
						<a href=""><span uk-icon="facebook"></span></a>
						<a href=""><span uk-icon="instagram"></span></a>
						<a href=""><span uk-icon="linkedin"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="uk-container uk-container-large ss-footer-bottom">
		<div class="ss-left">© All rights reserved.
		</div>
		<div class="ss-right">Development with love by: Sashil</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>