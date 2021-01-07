<?php
$tags = get_the_tags();
?>
<?php if($tags) { ?>
<div class="mkdf-tags-holder">
    <div class="mkdf-tags">
        <h6 class="mkdf-tags-text"><?php esc_html_e('Tags:', 'overton'); ?></h6>
        <?php the_tags('', ', ', ''); ?>
    </div>
</div>
<?php } ?>