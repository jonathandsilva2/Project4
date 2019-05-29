<?php
/**
* Template Name: About
*
*/

get_header(); ?>

	<div id="primary" class="content-area about-page">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
		<main class="about-hero">
		<h1>ABOUT</h1>
		</main>
		<article class="about-text">
		<h2>OUR STORY</h2>
		<p>Inhabitent Camping Supply Co. has been Vancouver camping supply icon for more than two whole months! Customers often comment on the bustle of activity they see in store…that’s where the magic happens every day.</p>
<p>We want to bridge the gap between the comfort of city life and the lovely Instagram-worthiness of the great outdoors that surround us. We sell gear that’s fun and functional. So much fun, in fact, that you’ll want to pitch a tent inside your one-bedroom apartment so you can use it every day.</p>
<h2>OUR TEAM</h2>
<p>Inhabitent Camping Supply Co.’s staff is made up of an amazing team of inspired retail associates. We really know our stuff when it comes to travel hammocks and campfire cooking gadgets. From a provincial park campground to the back-country, our staff knows what you need to outfit your outdoor outing.</p>
<p>Our shop is nestled away in a lovely little corner of Vancouver. Pop in, say hi, and try out our tents!</p>
</article>


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
