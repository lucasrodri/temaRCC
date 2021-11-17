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

<article id="redes-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-lg">
		<header class="entry-header alignwide">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); 
			
			// função com "Postado em"
			funcao_publicado_em();
			?>
		</header><!-- .entry-header -->

		<div class="entry-content mt-1">
			<?php
			//the_content();
			the_field('texto');
			?>

			<?php if (get_field('visao')) {?>
				<div class="mt-3 mb-3">
					Link do visão:
					<a href="<?php the_field('visao');?>" target="_blank">Veja as unidades</a>
				</div>
			<?php } ?>

			<?php if (get_field('servicos')) {?>
				<div class="mt-3">
					Serviços associados:
					<?php the_field('servicos');?>
				</div>
			<?php } ?>
			
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
