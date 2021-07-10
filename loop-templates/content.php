<?php

/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<div class="uk-width-1-3@m uk-grid-item-match">
	<article class="uk-card uk-card-default" id="post-<?php the_ID(); ?>">
		<div class="uk-padding-small uk-card-header">
			<div class="uk-grid-small uk-flex-middle" uk-grid>
				<div class="uk-width-expand">
					<h3 class="uk-card-title uk-margin-remove-bottom"> <?php the_title(); ?></h3>
					<p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00"><?php understrap_posted_on(); ?></time></p>
				</div>
			</div>
		</div>
		<div class="uk-padding-small">
			<?php the_content(); ?>
		</div>
		<div class=" uk-padding-small">
			<a href="<?php the_permalink() ?>" class="uk-button uk-button-text">Read more</a>
		</div>
	</article>
</div><!-- #post-## -->