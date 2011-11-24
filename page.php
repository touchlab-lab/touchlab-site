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
		<?php get_template_part('sidebar') ?>	
		<div id="content-main">	
			<div class="cmc"><div class="cmt"><div class="cmb">			
				<div id="content" class="content-main-body clearfix">
					
					<div class="content-col-main <?php if($has_sidebar): ?>compressed<?php endif; ?>">						
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
<?php get_footer() ?>	