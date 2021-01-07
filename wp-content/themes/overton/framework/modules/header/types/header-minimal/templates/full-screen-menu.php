<div class="mkdf-fullscreen-menu-holder-outer">
	<div class="mkdf-fullscreen-menu-holder">
		<div class="mkdf-fullscreen-menu-holder-inner">
			<?php if ($fullscreen_menu_in_grid) : ?>
				<div class="mkdf-container-inner">
			<?php endif; ?>
			
			<?php 
			//Navigation
			overton_mikado_get_module_template_part('templates/full-screen-menu-navigation', 'header/types/header-minimal');;

			?>

			<div class="mkdf-fullscreen-below-menu-widget-holder">
				<?php overton_mikado_get_header_widget_area_two(); ?>
			</div>
			
			<?php if ($fullscreen_menu_in_grid) : ?>
				</div>
			<?php endif; ?>
		</div>
        <span class="mkdf-fullscreen-line mkdf-fsl-1"></span>
        <span class="mkdf-fullscreen-line mkdf-fsl-2"></span>
        <span class="mkdf-fullscreen-line mkdf-fsl-3"></span>
	</div>
</div>