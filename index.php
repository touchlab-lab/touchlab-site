<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Touchtech
 * @subpackage Touchtech
 * @since Touchtech 1.0
 */
?>
<?php get_header() ?>

		<div id="content-main" class="content-home">			
				<div id="content" class="content-main-body clearfix">
					<div id="home-banner">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/images/home_banner.png" />
					</div>
					<div id="home-modules">
					
						<?php dynamic_sidebar( 'home-modules' ); ?>
						
					</div>
				
				</div>
		</div>
		
<?php get_footer() ?>	