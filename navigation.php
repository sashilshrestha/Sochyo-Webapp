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
			<a class="uk-navbar-toggle fr-burger">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
	</div>
	</div>


</header>