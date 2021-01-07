<?php get_header(); ?>
				<div class="mkdf-page-not-found">
					<?php
					$mkdf_title_image_404 = overton_mikado_options()->getOptionValue( '404_page_title_image' );
					$mkdf_title_404       = overton_mikado_options()->getOptionValue( '404_title' );
					$mkdf_subtitle_404    = overton_mikado_options()->getOptionValue( '404_subtitle' );
					$mkdf_text_404        = overton_mikado_options()->getOptionValue( '404_text' );
					$mkdf_button_label    = overton_mikado_options()->getOptionValue( '404_back_to_home' );
					$mkdf_button_style    = overton_mikado_options()->getOptionValue( '404_button_style' );
					
					if ( ! empty( $mkdf_title_image_404 ) ) { ?>
						<div class="mkdf-404-title-image">
							<img src="<?php echo esc_url( $mkdf_title_image_404 ); ?>" alt="<?php esc_attr_e( '404 Title Image', 'overton' ); ?>" />
						</div>
					<?php } ?>
					
					<h1 class="mkdf-404-title">
						<?php if ( ! empty( $mkdf_title_404 ) ) {
							echo esc_html( $mkdf_title_404 );
						} else {
							esc_html_e( '404', 'overton' );
						} ?>
					</h1>
                    <form role="search" method="get" class="mkdf-404-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div class="input-holder clearfix">
                            <input type="search" class="search-field" placeholder="<?php esc_attr_e('Search for...', 'overton'); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php esc_attr_e('Search for:', 'overton'); ?>"/>
                            <button type="submit" class="mkdf-search-submit"><?php echo overton_mikado_icon_collections()->renderIcon( 'ion-ios-search', 'ion_icons' ); ?></button>
                        </div>
                    </form>
					<h3 class="mkdf-404-subtitle">
						<?php if ( ! empty( $mkdf_subtitle_404 ) ) {
							echo esc_html( $mkdf_subtitle_404 );
						} else {
							esc_html_e( 'Page not found', 'overton' );
						} ?>
					</h3>
					
					<p class="mkdf-404-text">
						<?php if ( ! empty( $mkdf_text_404 ) ) {
							echo esc_html( $mkdf_text_404 );
						} else {
							esc_html_e( 'Oops! The page you are looking for does not exist. It might have been moved or deleted.', 'overton' );
						} ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>