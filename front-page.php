<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

<style>
.site-main{
	margin:auto;
}
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php 
		//if ( have_posts() ) :
			//get_template_part( 'loop' );
		//else :
			//get_template_part( 'content', 'none' );
		//endif; ?>

		<?php 	$attachment_id = get_field('home_page_slider');
				$size = "full";
				$image = wp_get_attachment_image_src( $attachment_id, $size ); 	
				if ( $image != 0 ) { ?>

				<img src="<?php echo $image[0]; ?>" />
				
		<?php 	} else {
				get_the_image( array( 'size' => 'thumbnail', 'default_image' => get_stylesheet_directory_uri() . '/images/placeholder.jpg' ) );
		} ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//do_action( 'storefront_sidebar' );
get_footer(); ?>

