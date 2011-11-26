<?php
/**
 * Touchtech functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package Touchtech
 * @subpackage Touchtech
 * @since Touchtech 1.0
 */

if ( ! function_exists( 'touchtech_widgets_init' ) ):
/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override twentyten_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
  * @since Touchtech 1.0
 * @uses register_sidebar
 */
function touchtech_widgets_init() {
	// Area 1, located at home page.
	register_sidebar( array(
		'name' => __( 'Home Widgets', 'touchtech' ),
		'id' => 'home-modules',
		'description' => __( 'Widget Area at home page', 'touchtech' ),
		'before_widget' => '<div id="%1$s" class="%2$s home-module"><div class="home-module-content">',
		'after_widget' => "</div></div>\n",
	) );
	// Area 2, located at the left sidebar.
	register_sidebar( array(
		'name' => __( 'Left Sidebar', 'touchtech' ),
		'id' => 'sidebar-modules',
		'description' => __( 'Widget Area at left sidebar.Two widgets are preloaded already.', 'touchtech' ),
		'before_widget' => '<div id="%1$s" class="%2$s sidebar-module"><div class="smb"><div class="smt"><div class="smc">',
		'after_widget' => "</div></div></div></div>\n",
	) );
}
endif;

add_action( 'widgets_init', 'touchtech_widgets_init' );

if ( ! function_exists( 'get_posts_by_category' ) ):
function get_posts_by_category($cat) {		
	$module_cat = get_category_by_slug( $cat );
	return $module_cat->term_id ? get_posts( array( 'category' => $module_cat->term_id ) ) : array();
}
endif;

if ( ! function_exists( 'twentyten_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyten_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'twentyten'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

if ( ! function_exists( 'blog_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own twentyeleven_posted_on to override in a child theme
 *
 * @since Twenty Eleven 1.0
 */
function blog_posted_on() {
	printf( __( '<time class="entry-date" datetime="%1$s" pubdate>%2$s</time>', 'twentyeleven' ),
//		esc_url( get_permalink() ),
//		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
//		,
//		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
//		sprintf( esc_attr__( 'View all posts by %s', 'twentyeleven' ), get_the_author() ),
//		esc_html( get_the_author() )
	);
}
endif;