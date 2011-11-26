<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Touchtech
 * @subpackage Touchtech
 * @since Touchtech 1.0
 */
?>
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
	$page_title = "Blog";
	$sidebar_header = get_post_meta($post->ID, 'sidebar-header', true);
	$sidebar_content = get_post_meta($post->ID, 'sidebar-content', true);
	$has_sidebar = ($sidebar_header || $sidebar_content);
?>	
<?php get_header() ?>

<table width="100%">
	<tr>
		<td style="width: 225px;vertical-align: top;">
		<?php get_template_part('sidebar') ?>	
		</td>
		
		
		
		<td style="padding-left: 35px;">
		<div id="content-main" style="vertical-align: top">	
			<!-- <div class="cmc"><div class="cmt"><div class="cmb"> -->
				<div id="content" class="content-main-body clearfix">
					
					<div class="content-col-main <?php if($has_sidebar): ?>compressed<?php endif; ?>">						


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="blog-banner">
				<div class="left"></div>
				<div class="right"></div>
				<div><?php the_title(); ?><br/>
				<span style="font-size:9pt;margin-top: 3px;display: inline-block;"><?php blog_posted_on(); ?>, posted in: <?php the_category(', ') ?></span>
				</div>
				
				</div>
					
<table>
<tr>
<td style="vertical-align: top; padding: 9px; width: 152px;">
<?php if ( get_the_author() ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div class="entry-author-info">
						
						<div class="author-avatar">
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 150 ) ); ?>
							</a>
						</div>
						
						<div class="author-description">
							<div class="title">Author</div>
							<div class="name">
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo(get_the_author()) ?></a>
							</div>
							<div class="description">
							<?php the_author_meta( 'description' ); ?>
							</div>
						</div>
						
					</div>
<?php endif; ?>

</td>
<td style="vertical-align: top; padding: 9px;">
<?php the_content(); ?><br/><br/>
<?php the_tags('', ', ', ''); ?><br/>
<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
</td>

</tr>
</table>

					<div class="clearfix">&nbsp;</div>

				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div><!-- #nav-below -->

				<?php 
				//comments_template( '', true ); 
				?>

<?php endwhile; // end of the loop. ?>



						</div>
						
						
						
				
					</div>
				<!-- </div></div></div> -->
			</div>
		</td>
	</tr>
</table>

<?php get_footer() ?>	