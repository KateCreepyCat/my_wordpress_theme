<?php
/*
Template Name: Листинги
Template Post Type: page
*/
?>
<?php get_header(); ?>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
				<?php $args = [
					'numberposts' => 9,
					'post_type'   => 'listing'
				];
				$query      = new WP_Query( $args );
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
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
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
					}
					wp_reset_postdata();?>

				<?php } else {
					echo 'Записей нет.';
				}
				?>


            </div>
        </div>
    </div>
<?php get_footer(); ?>