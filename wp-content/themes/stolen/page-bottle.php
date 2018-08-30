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
  <?php the_content(); 

?>

<div class="flex">
<div class="recipes">
<?php
    $id = get_the_ID();
    switch ($id) {
        case 127:
            $drinks = get_posts( array(
                'category' => 11
            ) );
            // var_dump($drinks);
            foreach($drinks as $drink) : setup_postdata($drink);
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $drink->ID ), 'single-post-thumbnail' );
                // echo '<div><a class="summary-title-link" href=""><br><img class="summary-thumbnail-image loaded" src="'.$image[0].'"><p>'.$drink->post_title.'</p></a></div>';
            endforeach;
            break;
    }
?>
</div>
</div>

<?php endwhile;  endif;?>

<?php get_footer(); ?>
