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
<?php wp_title("", true) ?>
</div>
<div style="margin-top: 10px;" class="white-body-left">
<?php echo get_post_meta($post->ID, 'sub_title', true); ?>
</div>

