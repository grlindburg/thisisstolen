<?php get_header(); ?>
<div class="drinks">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    echo get_the_post_thumbnail( $_post->ID, '300x300' );
?>

    <div class="details">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
<?php endwhile;  endif;?>
</div>
<?php get_footer(); ?>
