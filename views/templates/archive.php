<?php
/**
 * Template Name: Quienes somos
 *
 * Description: Plantilla pagina de Quienes somos
 */
get_header(); ?>

<section id="primary" class="site-content span12" role="main">

	<section class="content row wrap">

	    <?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'content', get_post_type() ); ?>
				<?php include( PTQS_PLUGIN_ROOT . 'views/templates/content.php' ); ?>

			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</section> <!-- .content -->
</section> <!-- #primary -->

<?php get_footer(); ?>
