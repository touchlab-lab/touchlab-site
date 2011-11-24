<?php
/**
 * The template for displaying Category Archive pages.
 *
<?php
/**
 * The left sidebar for our theme.
 *
 * @package Anomalous Networks
 * @subpackage Anomalous Networks
 * @since Anomalous Networks 1.0
 */
?>
<?php get_header() ?>
		<?php get_template_part('sidebar') ?>	
		<div id="content-main">	
			<div class="cmc"><div class="cmt"><div class="cmb">			
				<div id="content" class="content-main-body clearfix">
					<div class="content-col-main">				
						<h2><?php single_cat_title() ?></h2>
				<?php
				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>				
					</div>
					
				</div>
			</div></div></div>
		</div>
<?php get_footer() ?>	