<?php get_header(); ?>

<?php

// WP_Query arguments
$args = array ('offset' => 3 )
);

// The Query
$the_query = new WP_Query( $args );
?>

  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<!-- Start Basic 1-16 -->
	<section id="basic-1-16" class="basic-1-16 content-block">
		<div class="container">
			<div class="row">
				
				<div class="col-md-4 col-sm-6">
					<img class="img-responsive" src="http://placehold.it/600x400">
					<div class="editContent">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="editContent">
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
				
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

	<?php endwhile; endif; ?>

	<?php
	// Restore original Post Data
	wp_reset_postdata();
	?>

    <!--// END Basic 1-16 -->
<?php get_footer(); ?>