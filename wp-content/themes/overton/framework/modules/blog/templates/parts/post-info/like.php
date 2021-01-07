<?php if(overton_mikado_core_plugin_installed()) { ?>
    <div class="mkdf-blog-like">
        <?php if( function_exists('overton_mikado_get_like') ) overton_mikado_get_like(); ?>
    </div>
<?php } ?>