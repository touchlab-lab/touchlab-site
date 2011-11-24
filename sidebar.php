<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package Touchtech
 * @subpackage Touchtech
 * @since Touchtech 1.0
 */
?>
<div id="sidebar">
	<div id="sidebar-modules">
	
		<?php get_template_part('widget-quote') ?>		
		<?php dynamic_sidebar( 'sidebar-modules' ); ?>
		
	</div>
</div>
