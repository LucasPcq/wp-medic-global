<?php
$blog_single_navigation = overton_mikado_options()->getOptionValue('blog_single_navigation') === 'no' ? false : true;
$blog_navigation_through_same_category = overton_mikado_options()->getOptionValue('blog_navigation_through_same_category') === 'no' ? false : true;
?>
<?php if($blog_single_navigation){ ?>
	<div class="mkdf-blog-single-navigation">
		<div class="mkdf-blog-single-navigation-inner clearfix">
			<?php
                $prevPost = get_previous_post();
                $nextPost = get_next_post();
                $post_navigation = array();

                /* Single navigation section - SETTING PARAMS */
                if(isset($prevPost) && $prevPost !== '' && $prevPost !== null) {
                    $post_navigation['prev'] = array(
                        'mark'  => '<span class="mkdf-blog-single-nav-mark ion-ios-arrow-back"></span>',
                        'label' => '<h6 class="mkdf-blog-single-nav-label">' . esc_html__( 'previous', 'overton' ) . '</h6>'
                    );
                }

                if(isset($nextPost) && $nextPost !== '' && $nextPost !== null) {
                    $post_navigation['next'] = array(
                        'mark'  => '<span class="mkdf-blog-single-nav-mark ion-ios-arrow-forward"></span>',
                        'label' => '<h6 class="mkdf-blog-single-nav-label">' . esc_html__( 'next', 'overton' ) . '</h6>'
                    );
                }
			
				if($blog_navigation_through_same_category){
					if(get_previous_post(true) !== ""){
						$post_navigation['prev']['post'] = get_previous_post(true);
					}
					if(get_next_post(true) !== ""){
						$post_navigation['next']['post'] = get_next_post(true);
					}
				} else {
					if(get_previous_post() !== ""){
						$post_navigation['prev']['post'] = get_previous_post();
					}
					if(get_next_post() !== ""){
						$post_navigation['next']['post'] = get_next_post();
					}
				}

				/* Single navigation section - RENDERING */
				foreach (array('prev', 'next') as $nav_type) {
					if (isset($post_navigation[$nav_type]['post'])) { ?>
						<a itemprop="url" class="mkdf-blog-single-<?php echo esc_attr($nav_type); ?>" href="<?php echo get_permalink($post_navigation[$nav_type]['post']->ID); ?>">
							<?php echo wp_kses($post_navigation[$nav_type]['mark'], array('span' => array('class' => true))); ?>
							<?php echo wp_kses($post_navigation[$nav_type]['label'], array('h6' => array('class' => true))); ?>
						</a>
					<?php }
				}
			?>
		</div>
	</div>
<?php } ?>