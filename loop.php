<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package Anomalous Networks
 * @subpackage Anomalous Networks
 * @since Anomalous Networks 1.0
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
		<?php get_template_part('sidebar') ?>	
		</td>
		
		
		
		<td style="padding-left: 35px;">
		<div id="content-main" style="vertical-align: top">	
			<!-- <div class="cmc"><div class="cmt"><div class="cmb"> -->
		<div id="content" class="clearfix">
					
<!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="content-main-body">
		<div class="content-col-main <?php if($has_sidebar): ?>compressed<?php endif; ?>">						
		
		
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<div class="blog-banner">
				<div class="left"></div>
				<div class="right"></div>
				<div><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br/>
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
					<?php the_content_limit(1000, "More &raquo;"); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</td>
				
				</tr>
			</table>
		
		
			</div>
		</div>
	</div>

 <!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else: ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
 
 						
 						
 						
 						
 				
 					</div>
 				<!-- </div></div></div> -->
 			</div>
 		</td>
 	</tr>
 </table>
 
 <?php get_footer() ?>

