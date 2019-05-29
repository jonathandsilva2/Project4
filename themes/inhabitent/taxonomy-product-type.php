<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<h2>
	LMAO
</h2>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<!--this code is for grabbing the product title and image -->
			<?php foreach($products_posts as $post):?>
	  <h2><?php echo $post->post_title ;?></h2>
	 <?php echo get_the_post_thumbnail();?>
	  <?php endforeach ;?> 


				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
