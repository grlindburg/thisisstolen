<?php 
/**
 * Template Name: Bottle
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- <h1><?php the_title(); ?></h1> -->
  <div id="scratch">
		<img src="http://grlindburg.com/stolen/wp-content/uploads/2018/08/E4110_10.png">
	</div>
  <?php the_content(); ?>

<?php endwhile;  endif;?>

<?php get_footer(); ?>
