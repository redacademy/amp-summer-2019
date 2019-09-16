<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="four-o-four four-o-four-image">
<img src="<?php echo esc_url(get_template_directory_uri()) . '/images/amp_404.png' ?>" alt="404 logo">
</div>
<div class="four-o-four four-o-four-text">
	<h1>Sorry, page not found.</h1>
</div>



	

<?php get_footer(); ?>
