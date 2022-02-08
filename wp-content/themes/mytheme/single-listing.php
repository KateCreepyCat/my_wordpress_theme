<?php
/*
Template Name: Листинг
Template Post Type: listing
*/
?>
<?php get_header(); ?>
<div class="container marketing">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"><?php the_title(); ?></h2>
            <p class="lead"><?php the_content(); ?></p>
        </div>
        <div class="col-md-5">
			<?php the_post_thumbnail( 'single-listing-thumbnail' ) ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
