<?php
$post_classes[] = 'mkdf-item-space';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?>>
    <div class="mkdf-post-content">
        <div class="mkdf-post-text">
            <div class="mkdf-post-text-inner">
                <div class="mkdf-post-info-top">
                    <div class="mkdf-post-mark">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="53px" height="36px" viewBox="0 0 53 36" enable-background="new 0 0 53 36" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path fill="#030204" d="M14.154,2.116c6.434,0,11.673,5.236,11.673,11.674c0,6.734-6.286,16.013-11.524,20.654h-7.78
                                        c1.945-2.994,3.739-6.287,4.786-9.58c-5.985-1.047-8.826-6.136-8.826-11.074C2.482,7.352,7.716,2.116,14.154,2.116z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#030204" d="M39.2,2.116c6.433,0,11.672,5.236,11.672,11.674c0,6.734-6.286,16.013-11.525,20.654h-7.78
                                        c1.947-2.994,3.74-6.287,4.787-9.58c-5.986-1.047-8.827-6.136-8.827-11.074C27.526,7.352,32.762,2.116,39.2,2.116z"/>
                                </g>
                            </g>
                        </g>
                        </svg>
                    </div>
                </div>
                <div class="mkdf-post-text-main">
                    <?php overton_mikado_get_module_template_part('templates/parts/post-type/quote', 'blog', '', $part_params); ?>
                </div>
            </div>
        </div>
    </div>
</article>