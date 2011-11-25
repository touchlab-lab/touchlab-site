<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Touchtech
 * @subpackage Touchtech
 * @since Touchtech 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'touchtech' ), max( $paged, $page ) );

	?></title>


<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_enqueue_script("jquery");
	
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript">
	var bloginfo = { 'template_url' : '<?php echo bloginfo( "template_url" ); ?>'}
</script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/default.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper-header">
	 	<table cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 25px;">
	 		<tr>
	 			<td>
	 			<a href="<?php echo get_option( 'home' ); ?>">
	 				<img 
	 				src="<?php echo bloginfo( 'template_url' ); ?>/images/logo.png" 
	 				alt="<?php bloginfo( 'name' ); ?>" 
	 				title="<?php bloginfo( 'name' ); ?>" />
	 			</a>
	 			</td>
	 			
	 			<td align="right" style="vertical-align: top;">
	 			<div style="padding-top: 4px;">
<a href="http://www.twitter.com/touchlabny"><img src="<?php echo bloginfo( 'template_url' ); ?>/images/soci-twit.png"/></a>
<a style="padding-left:4px;padding-right:4px" href="http://www.twitter.com/touchlabny"><img src="<?php echo bloginfo( 'template_url' ); ?>/images/soci-fb.png"/></a>
<a href="http://www.twitter.com/touchlabny"><img src="<?php echo bloginfo( 'template_url' ); ?>/images/soci-goog.png"/></a>
				</div>
	 				
	 				<div style="padding-top: 34px;"> 			
	 			<?php wp_nav_menu( array( 'container' => '', 'menu' => 'main', 'menu_id' => 'links-main' ) ); ?>
	 			</div>
	 			</td>
	 		</tr>
	 	</table>
	</div>
	<div class="green-bar">&nbsp;</div>
	<div class="gray-body">
	<div id="wrapper" class="hfeed clearfix">
		<div id="main" class="clearfix">	