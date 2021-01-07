<form role="search" method="get" class="mkdf-searchform searchform" id="searchform-<?php echo esc_attr(rand(0, 1000)); ?>" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text"><?php esc_html_e( 'Search for:', 'overton' ); ?></label>
	<div class="input-holder clearfix">
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search for...', 'overton' ); ?>" value="" name="s" title="<?php esc_attr_e( 'Search for:', 'overton' ); ?>"/>
		<button type="submit" class="mkdf-search-submit"><?php echo overton_mikado_icon_collections()->renderIcon( 'ion-ios-search', 'ion_icons' ); ?></button>
	</div>
</form>