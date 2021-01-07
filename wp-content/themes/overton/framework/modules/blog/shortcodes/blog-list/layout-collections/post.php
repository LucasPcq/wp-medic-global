<li class="mkdf-bl-item mkdf-item-space">
	<div class="mkdf-bli-inner">
		<?php if ( $post_info_image == 'yes' ) {
			overton_mikado_get_module_template_part( 'templates/parts/media', 'blog', '', $params );
		} ?>
        <div class="mkdf-bli-content">
            <?php if ($post_info_section == 'yes') { ?>
                <div class="mkdf-bli-info">
	                <?php
		                if ( $post_info_date == 'yes' ) {
			                overton_mikado_get_module_template_part( 'templates/parts/post-info/date', 'blog', '', $params );
		                }
                        if ( $post_info_author == 'yes' ) {
                            overton_mikado_get_module_template_part( 'templates/parts/post-info/author', 'blog', '', $params );
                        }
		                if ( $post_info_category == 'yes' ) {
			                overton_mikado_get_module_template_part( 'templates/parts/post-info/category', 'blog', '', $params );
		                }
		                if ( $post_info_comments == 'yes' ) {
			                overton_mikado_get_module_template_part( 'templates/parts/post-info/comments', 'blog', '', $params );
		                }
		                if ( $post_info_like == 'yes' ) {
			                overton_mikado_get_module_template_part( 'templates/parts/post-info/like', 'blog', '', $params );
		                }
		                if ( $post_info_share == 'yes' ) {
			                overton_mikado_get_module_template_part( 'templates/parts/post-info/share', 'blog', '', $params );
		                }
	                ?>
                </div>
            <?php } ?>
	
	        <?php overton_mikado_get_module_template_part( 'templates/parts/title', 'blog', '', $params ); ?>
	
	        <div class="mkdf-bli-excerpt">
		        <?php overton_mikado_get_module_template_part( 'templates/parts/excerpt', 'blog', '', $params ); ?>
	        </div>
        </div>
	</div>
</li>