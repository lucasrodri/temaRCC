<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	
	echo "<div class=\"container-lg d-block\">";
	echo "<div class=\"breadcrumb-post\" style=\"margin-left: -24px;\">";
	echo do_shortcode('[shortcode_breadcrumb]');
	echo "</div>";

	/* Pegar a taxonomia do post
	https://developer.wordpress.org/reference/functions/get_the_terms/#comment-2587 */
	$term_obj_list = get_the_terms( get_the_id(), 'suporte_categoria' );
	$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
	
	echo "<h3>Rede de Suporte</h3>";
	echo "<h4>".$terms_string."</h4>";
	echo "</div>";

	get_template_part( 'template-parts/redes/redes-single' );

	
endwhile; // End of the loop.

get_footer();
