<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();



if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_post_thumbnail(); ?>
<?php endwhile; 
endif; 

get_footer();

?>