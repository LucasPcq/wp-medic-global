<?php
$show_related = overton_mikado_options()->getOptionValue('blog_single_related_posts') == 'yes' ? true : false;
$related_post_number = overton_mikado_sidebar_layout() === 'no-sidebar' ? 4 : 3;
$related_posts_options = array(
    'posts_per_page' => $related_post_number
);
$related_posts = overton_mikado_get_blog_related_post_type(get_the_ID(), $related_posts_options);
$related_posts_image_size = isset($related_posts_image_size) ? $related_posts_image_size : 'full';
$image_size          = isset( $image_size ) ? 'overton_mikado_image_square' : 'overton_mikado_image_square';
?>
<?php if($show_related) { ?>
    <div class="mkdf-related-posts-holder clearfix">
        <div class="mkdf-related-posts-holder-inner">
            <?php if ( $related_posts && $related_posts->have_posts() ) : ?>
                <div class="mkdf-related-posts-title">
                    <h4><?php esc_html_e('Related Posts', 'overton' ); ?></h4>
                </div>
                <div class="mkdf-related-posts-inner clearfix">
                    <?php while ( $related_posts->have_posts() ) : $related_posts->the_post();
                        $image_meta          = get_post_meta( get_the_ID(), 'mkdf_blog_list_featured_image_meta', true );
	                    $has_featured        = ! empty( $image_meta ) || has_post_thumbnail();
	                    $blog_list_image_id  = ! empty( $image_meta ) && overton_mikado_blog_item_has_link() ? overton_mikado_get_attachment_id_from_url( $image_meta ) : '';
                        ?>
                        <div class="mkdf-related-post">
                            <div class="mkdf-related-post-inner">
			                    <?php if ($has_featured) { ?>
                                <div class="mkdf-related-post-image">
                                    <a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	                                    <?php if ( ! empty( $blog_list_image_id ) ) {
		                                    echo wp_get_attachment_image( $blog_list_image_id, $image_size );
	                                    } else {
		                                    the_post_thumbnail( $image_size );
	                                    } ?>
                                    </a>
                                </div>
			                    <?php }	?>
                                <h5 itemprop="name" class="entry-title mkdf-post-title"><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                <div class="mkdf-post-info">
                                    <?php overton_mikado_get_module_template_part('templates/parts/post-info/date', 'blog', '', $params); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
<?php } ?>