<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

	</header><!-- .entry-header -->

	<div class="entry-content">
	<div class="single-product">
		<div class="single-product-image">
	<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
	</div>
	<div class="single-product-meta">
	<h3><?php echo the_title(); ?></h3>
		<p class="single-product-price"><?php echo CFS()->get( 'price' ); ?></p>
		<p class="single-product-content"><?php the_content(); ?></p>
		<section class="single-social-buttons">
			<button type="button" class="black-btn">
			<i class="fab fa-facebook-f"></i>
			<span>Like</span>
			<button type="button" class="black-btn">
			<i class="fab fa-twitter"></i>
			<span>Tweet</span>
			<button type="button" class="black-btn">
			<i class="fab fa-pinterest"></i>
			<span>Pin</span>
			</section>
		
</div>

</div>



		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
