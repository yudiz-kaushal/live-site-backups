<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mia
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="error-page relative">
	<div class="container">
		<h1 class="heading-style-1">4<span>0</span>4</h1>
		<h2 class="heading-style-2">Page Not Found</h2>
		<p class="heading-style-5"><?php esc_html_e('It looks like nothing was found at this location.', 'naviage'); ?></p>
		<a href=" <?php echo home_url(); ?>" class="common-btn">Back to Home</a>
	</div>	
</div>

	</main><!-- #main -->

<?php
get_footer();
