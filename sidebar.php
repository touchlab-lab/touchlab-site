<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package Touchtech
 * @subpackage Touchtech
 * @since Touchtech 1.0
 */
?>
<div class="green-title-left">
<?php if($page_title) : ?>
	<?php echo $page_title ?>
<?php else : ?>
	<?php wp_title("", true) ?>
<?php endif; ?>
</div>
<div style="margin-top: 10px;margin-bottom: 25px;" class="white-body-left">
<?php echo get_post_meta($post->ID, 'sub_title', true); ?>
</div>
<div id="sidebar">
	<div id="sidebar-modules">
	
		<?php dynamic_sidebar( 'sidebar-modules' ); ?>
		
	</div>
</div>
