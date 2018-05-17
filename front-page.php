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


<?php 

			if( is_front_page() ) {
				if(function_exists('get_field')){
					if( get_field('slider_image_1') || get_field('slider_image_2') || get_field('slider_image_3') || get_field('slider_image_4') || get_field('slider_image_5') || get_field('slider_image_6') ) {
						echo "<div class='slider-frame'>";
						$image1 = get_field('slider_image_1');
						$image2 = get_field('slider_image_2');
						$image3 = get_field('slider_image_3');
						$image4 = get_field('slider_image_4');
						$image5 = get_field('slider_image_5');
						$image6 = get_field('slider_image_6');
						$size = 'slider';
						echo "<div class='slider'>";
						echo wp_get_attachment_image( $image1, $size );
						echo wp_get_attachment_image( $image2, $size );
						echo wp_get_attachment_image( $image3, $size );
						echo wp_get_attachment_image( $image4, $size );
						echo wp_get_attachment_image( $image5, $size );
						echo wp_get_attachment_image( $image6, $size );
						echo "</div>";
						echo "</div>";
					}
				}
			}


		 ?>

<h1>游水海鮮 Live Seafood</h1>
<?php echo do_shortcode('[featured_product_categories cats="17" per_cat="4" columns="4"]'); ?>
<h1>新鮮海鮮 Fresh Seafood</h1>
<?php echo do_shortcode('[featured_product_categories cats="18" per_cat="4" columns="4"]'); ?>
<h1>急凍海鮮 Featured Frozen Seafood</h1>
<?php echo do_shortcode('[featured_product_categories cats="16" per_cat="4" columns="4"]'); ?>
<h1>其他食材 Featured Other Seafood</h1>
<?php echo do_shortcode('[featured_product_categories cats="15" per_cat="4" columns="4"]'); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// do_action( 'storefront_sidebar' );
get_footer();
?>
