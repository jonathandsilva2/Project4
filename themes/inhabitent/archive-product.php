<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main shop" class="site-main shop" role="main">
		<div class="products-container">
			<?php while ( have_posts() ) : the_post('showposts=16'); ?>

		
				<?php if ( has_post_thumbnail() ) : ?>
				
				<div class="product-square">
					<div class="product-image">
				<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
				</div>
			<div class="product-meta">
			<p><?php echo CFS()->get( 'price' ); ?></p>
		<p><?php echo the_title(); ?></p>
</div>
</div>

		

			<?php endif; endwhile;
			// End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
