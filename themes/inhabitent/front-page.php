<?php
/**
 * The front-[age] template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="hero-home">
        <img class="home-logo" src="<?php echo get_template_directory_uri().'/images/logos/' ?>inhabitent-logo-full.svg" alt="Inhabitent Logo"/>
</div>





	<!--this code is for grabbing the product categories -->
	  <?php $bob = ['taxonomy' => 'product-type', 'hide_empty' => 0,];
	  $products_types = get_terms($bob);
	  ?>

	  <?php foreach($products_types as $types):?>
	  <p><?php  echo $types->name;?></p>
	  <?php endforeach ;?>


		
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>