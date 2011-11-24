<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Touchtech
 * @subpackage Touchtech
 * @since Touchtech 1.0
 */
?>
<?php get_header() ?>
		<?php get_template_part('sidebar') ?>	
		<div id="content-main">	
			<div class="cmc"><div class="cmt"><div class="cmb">			
				<div id="content" class="content-main-body clearfix">
					<div class="content-col-main">				
						<h2><?php _e( 'Not Found', 'twentyten' ); ?></h2>
						<div class="entry-content">
							<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
						
						<script type="text/javascript">
							// focus on search field after it has loaded
							document.getElementById('s') && document.getElementById('s').focus();
						</script>
					</div>
					
				</div>
			</div></div></div>
		</div>
<?php get_footer() ?>	