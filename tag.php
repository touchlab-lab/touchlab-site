<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header() ?>
		<?php get_template_part('sidebar') ?>	
		<div id="content-main">	
			<div class="cmc"><div class="cmt"><div class="cmb">			
				<div id="content" class="content-main-body clearfix">
					<div class="content-col-main compressed">				
						<h2><?php
					printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h2>
						

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>
					</div>
					
				</div>
			</div></div></div>
		</div>
<?php get_footer() ?>	