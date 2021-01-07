<?php
/**
 * The template 'Style 2' to displaying related posts
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

$blabber_link        = get_permalink();
$blabber_post_format = get_post_format();
$blabber_post_format = empty( $blabber_post_format ) ? 'standard' : str_replace( 'post-format-', '', $blabber_post_format );
?><div id="post-<?php the_ID(); ?>" <?php post_class( 'related_item post_format_' . esc_attr( $blabber_post_format ) ); ?>>
	<?php
	blabber_show_post_featured(
		array(
			'thumb_ratio' => '1:1',
			'thumb_size'    => apply_filters( 'blabber_filter_related_thumb_size', blabber_get_thumb_size( (int) blabber_get_theme_option( 'related_posts' ) == 1 ? 'huge' : 'big' ) ),
            'class' => (in_array( get_post_type(), array( 'post', 'attachment' ) ) ? 'width_cat_top' : '')
            )
	);
    if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
        blabber_show_post_meta(
            apply_filters(
                'blabber_filter_post_meta_args', array(
                'components' => 'categories',
                'seo' => false,
                'class' => 'cat_top'
            ), 'rel', 1
            )
        );
    }
	?>
	<div class="post_header entry-header">
        <h6 class="post_title entry-title"><a href="<?php echo esc_url( $blabber_link ); ?>"><?php the_title(); ?></a></h6>
		<?php
		if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
            blabber_show_post_meta(
                apply_filters(
                    'blabber_filter_post_meta_args', array(
                    'components' => 'author,date',
                    'seo'        => false,
                ), 'rel', 1
                )
            );
		}
		?>
	</div>
</div>