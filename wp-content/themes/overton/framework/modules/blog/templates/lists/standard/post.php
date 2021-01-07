<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?>>
    <div class="mkdf-post-content">
        <div class="mkdf-post-heading">
            <?php overton_mikado_get_module_template_part('templates/parts/media', 'blog', $post_format, $part_params); ?>
        </div>
        <div class="mkdf-post-text">
            <div class="mkdf-post-text-inner">
                <div class="mkdf-post-info-top">
                    <?php overton_mikado_get_module_template_part('templates/parts/post-info/date', 'blog', '', $part_params); ?>
                    <?php overton_mikado_get_module_template_part('templates/parts/post-info/category', 'blog', '', $part_params); ?>
                    <?php
                    if(overton_mikado_options()->getOptionValue('show_tags_area_blog') === 'yes') {
                            overton_mikado_get_module_template_part('templates/parts/post-info/tags', 'blog', '', $part_params);
                    } ?>
                </div>
                <div class="mkdf-post-text-main">
                    <?php overton_mikado_get_module_template_part('templates/parts/title', 'blog', '', $part_params); ?>
                    <?php overton_mikado_get_module_template_part('templates/parts/excerpt', 'blog', '', $part_params); ?>
                    <?php do_action('overton_mikado_action_single_link_pages'); ?>
                </div>
                <div class="mkdf-post-info-bottom clearfix">
                    <div class="mkdf-post-info-bottom-left">
                        <?php overton_mikado_get_module_template_part('templates/parts/post-info/author', 'blog', '', $part_params); ?>
                    </div>
                    <div class="mkdf-post-info-bottom-right">
                        <?php overton_mikado_get_module_template_part('templates/parts/post-info/share', 'blog', '', $part_params); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>