<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php #twenty_twenty_one_post_thumbnail(); ?>
	<div class="container-lg">
	<?php the_post_thumbnail( 'thumbnail_post' ); ?>
	</div>
	<div class="container-lg">
		<header class="entry-header alignwide">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); 
			
			// função com "Postado em"
			funcao_publicado_em();

			// Ícones de compartilhamento
			echo do_shortcode('[shortcode_social_links]');
			?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content();
			
			// Não mostra nada no post
			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
					'after'    => '</nav>',
					/* translators: %: Page number. */
					'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
				)
			);
			?>
		</div><!-- .entry-content -->

		<!-- Mostra o meta do post -->
		<footer class="entry-footer default-max-width">
			<?php //twenty_twenty_one_entry_meta_footer(); ?>

			<?php
				// função com Categorias, Tags e Editar
				funcao_post_footer();

				// Ícones de compartilhamento
				echo do_shortcode('[shortcode_social_links]');
			?>
		</footer><!-- .entry-footer -->
		
		<!-- Não mostra nada no post -->
		<?php if ( ! is_singular( 'attachment' ) ) : ?>
			<?php get_template_part( 'template-parts/post/author-bio' ); ?>
		<?php endif; ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
