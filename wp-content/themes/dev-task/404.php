<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

	<div class="error-header">
		<div class="error-header-content">
			<img class="logo" src="<?php bloginfo('template_url'); ?>/img/main-logo.svg" />
			<h1 class="super">Error 404</h1>
			<h1>Sorry we couldn't find your page</h1>
			<a href="<?php echo home_url(); ?>">Return Home</a>
		</div>
	</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>