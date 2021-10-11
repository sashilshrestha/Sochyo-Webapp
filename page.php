<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>
<div class="ss-header-section">
	<div class="ss-bg-overlay"></div>
	<img src="<?php echo get_site_url(); ?>/wp-content/themes/sochyo-theme/img/game-header.jpg" alt="">
</div>

<!-- Do the left sidebar check -->
<main class="site-main" id="main">

	<?php
	while (have_posts()) {
		the_post();

		get_template_part('loop-templates/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) {
			comments_template();
		}
	}
	?>

</main><!-- #main -->

<!-- Do the right sidebar check -->

<?php
get_footer();
