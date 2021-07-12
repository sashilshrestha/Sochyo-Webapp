	<!-- ******************* The Navbar Area ******************* -->
	<nav>
		<div class="uk-navbar-container" uk-navbar>
			<div class="uk-container uk-container-large" style="width: 100%">
				<nav class="uk-navbar-container" uk-navbar>
					<div class="uk-navbar-left">

						<ul class="uk-navbar-nav">
							<li class="uk-active"><a href="#">Home</a></li>
							<li>
								<a href="#">Shop</a>
							</li>
							<li><a href="#">Account</a></li>
						</ul>

					</div>
				</nav>
			</div>
		</div>
	</nav><!-- #wrapper-navbar end -->
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_class' => 'uk-flex',
			'container_class' => '',
			'container_id' => '',
			'link_class'   => 'menu__item', // Need to add function for adding link class in function.php 
		)
	);
	?>