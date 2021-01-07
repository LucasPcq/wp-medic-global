<?php

overton_mikado_get_single_post_format_html( $blog_single_type );

do_action( 'overton_mikado_action_after_article_content' );

overton_mikado_get_module_template_part( 'templates/parts/single/author-info', 'blog' );

overton_mikado_get_module_template_part( 'templates/parts/single/comments', 'blog' );

overton_mikado_get_module_template_part( 'templates/parts/single/related-posts', 'blog', '', $single_info_params );

overton_mikado_get_module_template_part( 'templates/parts/single/single-navigation', 'blog' );