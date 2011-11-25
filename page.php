<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Touchtech
 * @subpackage Touchtech
 * @since Touchtech 1.0
 */
?>
<?php 
	$sidebar_header = get_post_meta($post->ID, 'sidebar-header', true);
	$sidebar_content = get_post_meta($post->ID, 'sidebar-content', true);
	$has_sidebar = ($sidebar_header || $sidebar_content);
?>
<?php get_header() ?>
		<table width="100%">
			<tr>
				<td style="width: 225px;vertical-align: top;">
				<div class="green-title-left">
				<?php wp_title("", true) ?>
				</div>
				<div style="margin-top: 10px;" class="white-body-left">
				<?php echo get_post_meta($post->ID, 'sub_title', true); ?>
				</div>
				</td>
				<td>
				<div id="content-main" style="vertical-align: top">	
					<div class="cmc"><div class="cmt"><div class="cmb">			
						<div id="content" class="content-main-body clearfix">
							
							<div class="content-col-main <?php if($has_sidebar): ?>compressed<?php endif; ?>">						<?php remove_filter ('the_content', 'wpautop'); ?>
								<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
														<?php the_content(); ?>	
													<?php endwhile; ?>
								</div>
								
								<?php if($has_sidebar): ?>
									<div class="content-sidebar">
									<?php if($sidebar_header): ?>
										<div class="content-sidebar-header"><?php echo $sidebar_header ?></div>
									<?php endif; ?>
									<?php if($sidebar_content): ?>
										<div class="content-sidebar-content">
										<?php echo $sidebar_content ?>
										</div>
									<?php endif; ?>
									</div>
								<?php endif; ?>
							
						
							</div>
						</div></div></div>
					</div>
				</td>
			</tr>
		</table>
		<?php get_template_part('sidebar') ?>	
		
<?php get_footer() ?>	