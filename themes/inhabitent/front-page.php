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
	  <section class="product-blocks">
	  <h1 class="product-block-title"> SHOP STUFF </h1>
	<div class="product-block">
	  <?php foreach($products_types as $types):?>
	  <div class="product-block-item">
	  
	  <?php echo get_term_thumbnail($types->term_taxonomy_id) ?>
	  <?php echo category_description($types) ?>
	  <a href="<?php  echo get_term_link($types);?>"><?php  echo $types->name;?> STUFF</a>
</div>
	<?php endforeach ;?>
</div>
</section>
<section class="latest-entries">
	<h1 class="home-titles">inhabitent journal</h1>
	<div class="latest-entry-container">
			<?php
				$args = array( 'numberposts' => '3' );
				$recent_posts = wp_get_recent_posts( $args );
				?>
				<?php foreach( $recent_posts as $recent ){	
					echo	'<article class="latest-entry">';
					echo '<div class="latest-entry-thumbnail">';
					echo get_the_post_thumbnail( $recent["ID"]);
					echo '</div>';
					echo '<div class="latest-entry-meta">';
					echo '<p class="meta">';
					echo red_starter_posted_on(); 
					echo ' / ';
					echo comments_number( '0 Comments', '1 Comment', '% Comments' ); 
					echo '</p>';
					echo '<h2><a class ="LOL"href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></h2> ';
					echo '</div>';
					echo '<a class="latest-entry-button" href="'. get_permalink($recent["ID"]). '">Read Entry</a>';
					echo	'</article>';
				}
				wp_reset_query();
			?>
	</div>
</section>

		
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>