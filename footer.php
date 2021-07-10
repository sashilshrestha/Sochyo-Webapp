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

<center>
	<h5 class="uk-text-bolder uk-background-muted uk-padding-small" style="margin-top: 2rem;">Sochyo.com.np</h5>
</center>


</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>

</html>