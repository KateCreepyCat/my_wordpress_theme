<?php get_header(); ?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light"><?php bloginfo( 'name' ); ?></h1>
            <p class="lead text-muted"><?php bloginfo( 'description' ); ?></p>
        </div>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<?php $args = [
				'numberposts' => 9,
				'post_type'   => 'listing'
			];
			$posts      = get_posts( $args );
			foreach ( $posts as $post ) {
				setup_postdata( $post );
				?>
                <div class="col">
                    <div class="card shadow-sm">
						<?php the_post_thumbnail( 'archive-listing-thumbnail' ) ?>
                        <div class="card-body">
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="<?php the_permalink(); ?>">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View
                                        </button>
                                    </a>
                                </div>
                                <small class="text-muted"><?php the_field( 'size' ) ?>
                                    $<?php the_field( 'price' ); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
			}
			wp_reset_postdata();
			?>


        </div>
    </div>
</div>
<?php get_footer(); ?>
