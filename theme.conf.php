<?php

/*  
Theme Name: Rainbow Theme
Original Author: Stealth Settings http://www.stealthsettings.com (ported to FP by Marcoverga, modified to Rainbow Theme by DeltaLima in 2023)
Author URI: https://git.la10cy.net/DeltaLima/flatpress-theme-rainbow
Description: 2-column theme, with orange/transparent look and widget bar on the left with colorful background (stolen from https://websitesetup.org/bootstrap-tutorial-for-beginners/)
Version: 0.9
FP Version Author: DeltaLima
FP Version URI: https://deltalima.org
Forked by DeltaLima in 2023 to "Rainbow Theme"
*/

	$theme['name'] = 'Rainbow Theme';
	$theme['author'] = 'DeltaLima';
	$theme['www'] = 'https://deltalima.org';
	$theme['version'] = '0.9.1';
	$theme['style_def'] = 'style.css';
	$theme['style_admin'] = 'admin.css';
	
	// Other theme settings
	// overrides default tabmenu and panel layout
	remove_filter('admin_head', 'admin_head_action');
	
	// register widgetsets
	//register_widgetset('right');
	register_widgetset('left'); 
?>
