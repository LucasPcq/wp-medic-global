<?php
/**
 * Template to display the team member's posts
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.6.63
 */

$args = get_query_var('trx_addons_args_sc_team');

$meta = get_post_meta(get_the_ID(), 'trx_addons_options', true);
$link = empty($args['no_links']) ? get_permalink() : '';

if ($args['slider']) {
	?><div class="slider-slide swiper-slide"><?php
} else if ($args['columns'] > 1) {
	?><div class="<?php echo esc_attr(trx_addons_get_column_class(1, $args['columns'], !empty($args['columns_tablet']) ? $args['columns_tablet'] : '', !empty($args['columns_mobile']) ? $args['columns_mobile'] : '')); ?>"><?php
}
?>
<div data-post-id="<?php the_ID(); ?>" <?php
	post_class( 'sc_team_posts_item' . (empty($post_link) ? ' no_links' : '') );
	trx_addons_add_blog_animation('team', $args);
?>>
	<?php
	// Featured image
	trx_addons_get_template_part('templates/tpl.featured.php',
								'trx_addons_args_featured',
								apply_filters('trx_addons_filter_args_featured', array(
												'class' => 'sc_team_posts_thumb width_cat_top',
                                                'no_links' => empty($link),
												'hover' => 'zoomin',
												'thumb_size' => apply_filters('trx_addons_filter_thumb_size', trx_addons_get_thumb_size('extra'), 'team-posts')
												), 'team-posts')
								);

    blabber_show_post_meta(
        apply_filters(
            'blabber_filter_post_meta_args', array(
            'components' => 'categories',
            'seo' => false,
            'class' => 'cat_top'
        ), 'rel', 1
        )
    );

	?>
	<div class="sc_team_posts_item_info post_header">
        <h6 class="sc_team_posts_item_title entry-title post_title"><?php
            if (!empty($link)) {
                ?><a href="<?php echo esc_url($link); ?>"><?php
            }
            the_title();
            if (!empty($link)) {
                ?></a><?php
            }
        ?></h6>
		<?php
        blabber_show_post_meta(
            apply_filters(
                    'blabber_filter_post_meta_args', array(
                    'components' => 'author,date',
                    'seo'        => false,
                ), 'team', 1
            )
        );
	?></div>
</div><?php
if ($args['slider'] || $args['columns'] > 1) {
	?></div><?php
}