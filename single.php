<?php get_header(); ?>

	<!-- Start Basic 1-16 -->
	<section class="basic-1-16 content-block-nopad custom-background" id="basic-1-16">
		<div class="container">
			<div class="row">
				
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<!-- needed here for the colour picker to pick up the correct background colour -->
 						<style type="text/css">
							.custom-background {
							    background-color: <?php the_field( 'color' ); ?>;
							}

							.custom-title-colour {
								color: <?php the_field('color'); ?>;
							}
						</style>

					<div class="akabakeneko-featured"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( $size = 'large', $attr = 'img-responsive' ); } ?>
							<h1 class="akabakeneko-post-title custom-title-colour"><?php the_title(); ?></h1>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						
						<?php get_template_part( 'content_pictures' ); ?>

					</div>
					<div <?php post_class( 'col-xs-12 col-sm-6 col-md-9' ); ?>>
						<?php the_field( 'review_text' ); ?>
					</div>
				</div>

			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-3 videoWrapper">
					<?php echo get_post_meta($post->ID, 'video', true); ?>
				</div>
				<div <?php post_class( 'col-xs-12 col-sm-6 col-md-9' ); ?>>
					
					<?php get_template_part( 'content_supplementary' ); ?>

				</div>

			</div>

	<?php endwhile; endif; ?>

	<?php
	// Restore original Post Data
	wp_reset_postdata();
	?>
				
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

    <!--// END Basic 1-16 -->
<?php get_footer(); ?>