<?php
/**
 * The style "default" of the Title block
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.4.3
 */

$args = get_query_var('trx_addons_args_sc_title');
$align = !trx_addons_is_off($args['title_align']) ? trim($args['title_align']) : '';

?><div id="<?php echo esc_attr($args['id']); ?>"
		class="sc_title sc_title_<?php
			echo esc_attr($args['type']);
			echo esc_attr(' '.$align.'-go ');
			if (!empty($args['class'])) echo ' '.esc_attr($args['class']);
			?>"<?php
		if ($args['css']!='') echo ' style="'.esc_attr($args['css']).'"';
?>><?php
    if($args['type'] == 'accent' && empty($args['subtitle']) && empty($args['description']) && $align != 'center') {
        blabber_show_layout('<div class="title-wrap-go">');
    }
	trx_addons_sc_show_titles('sc_title', $args);
	trx_addons_sc_show_links('sc_title', $args);
    if($args['type'] == 'accent' && empty($args['subtitle']) && empty($args['description']) && $align != 'center') {
        blabber_show_layout('</div>');
    }
?></div><!-- /.sc_title -->