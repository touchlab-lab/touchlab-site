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
				<table>
					<tr>
						<td valign="top" style="padding-top: 60px;">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/images/splash-screens.png" />
						</td>
						<td valign="top" style="vertical-align: top;padding-top: 95px;padding-left: 50px;">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/images/splash-text.png" />
						</td>
					</tr>
				</table>
				<center>
				<img 
				style="margin-top: 30px;margin-bottom: 30px;"
				src="<?php echo bloginfo( 'template_url' ); ?>/images/home-bar.png" />
				
					<div id="home-modules">
					
						<?php dynamic_sidebar( 'home-modules' ); ?>
						
					</div>
				</center>
				</div>
		</div>
		
<?php get_footer() ?>	