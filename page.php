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
				<?php get_template_part('sidebar-page') ?>	
				</td>
				<td style="padding-left: 15px;">
				<div id="content-main" style="vertical-align: top">	
					<!-- <div class="cmc"><div class="cmt"><div class="cmb"> -->
						<div id="content" class="content-main-body clearfix">
							
							<div class="content-col-main <?php if($has_sidebar): ?>compressed<?php endif; ?>">						<?php remove_filter ('the_content', 'wpautop'); ?>
								<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
														<?php the_content(); ?>	
													<?php endwhile; ?>
								</div>
								
								
								
						
							</div>
						<!-- </div></div></div> -->
					</div>
				</td>
			</tr>
		</table>
		
<?php get_footer() ?>	