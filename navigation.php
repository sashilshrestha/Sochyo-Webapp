<header class="ss-navbar" id="header">
	<div class="uk-container uk-container-large">
		<!-- Navigation -->
		<div class="ss-navigation-bar uk-width uk-position-relative">
			<!-- It should only contain logo -->
			<div class="ss-logo">
				<a href="<?php echo get_home_url() ?>" class="custom-logo-link" rel="home" aria-current="page"><img width="159" height="56" src="<?php echo get_home_url(); ?>/wp-content/themes/sochyo-theme/img/logo.png" class="custom-logo" alt="AB Holdings" /></a>
			</div>

			<!-- Navigation elemet must go here -->
			<div class="menu mobile">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class' => 'uk-flex',
						'container_class' => '',
						'container_id' => '',
						'link_class'   => 'menu__item', // Need to add function for adding link class in function.php 
					)
				);
				?>
			</div>
		</div>

		<!-- It only contains the hamburger -->
		<div class="ss-right">
			<!-- <a href="//localhost:3000/Sochyo_Custom/index.php/my-account/" class="menu__item uk-icon" uk-icon="user">.<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<circle fill="none" stroke="#000" stroke-width="1.1" cx="9.9" cy="6.4" r="4.4"></circle>
					<path fill="none" stroke="#000" stroke-width="1.1" d="M1.5,19 C2.3,14.5 5.8,11.2 10,11.2 C14.2,11.2 17.7,14.6 18.5,19.2"></path>
				</svg></a>
			<a class="wpmenucart-contents empty-wpmenucart-visible" href="//localhost:3000/Sochyo_Custom/index.php/shop/" title="Start shopping"><i class="wpmenucart-icon-shopping-cart-0" role="img" aria-label="Cart"></i><span class="cartcontents">0 items</span></a> -->
			<a class="uk-navbar-toggle fr-burger">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
	</div>
	</div>


</header>