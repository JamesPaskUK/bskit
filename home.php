<?php get_header(); ?>

	<!-- Start Basic 1-16 -->
	<section id="basic-1-16" class="basic-1-16 content-block">
		<div class="container">
			<div class="row">
				
				<!-- Post 1 -->
				<div class="col-md-4 col-sm-6">

					<?php

					// WP_Query arguments - displays 1st post
					$post1args = array ( 
						'offset' => 0,
						'posts_per_page' => 1,
						);

					// The Query
					$post1 = new WP_Query( $post1args );
					?>

					<?php if ( $post1->have_posts() ) : while ( $post1->have_posts() ) : $post1->the_post(); ?>

					<img class="img-responsive" <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(); } ?>
					<div class="editContent">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>
					<div class="editContent excerpt">
						<?php the_excerpt(); ?>
					</div>
				</div>

	<?php endwhile; endif; ?>

	<?php
	// Restore original Post Data
	wp_reset_postdata();
	?>

				<!-- Post 2 -->
				<div class="col-md-4 col-sm-6">

					<?php

					// WP_Query arguments - displays 2nd post
					$post2args = array ( 
						'offset' => 1,
						'posts_per_page' => 1,
						);

					// The Query
					$post2 = new WP_Query( $post2args );
					?>

					<?php if ( $post2->have_posts() ) : while ( $post2->have_posts() ) : $post2->the_post(); ?>

					<img class="img-responsive" <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(); } ?>
					<div class="editContent">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>
					<div class="editContent excerpt">
						<?php the_excerpt(); ?>
					</div>
				</div>

	<?php endwhile; endif; ?>

	<?php
	// Restore original Post Data
	wp_reset_postdata();
	?>

				<!-- Post 3 -->
				<div class="col-md-4 col-sm-6">

					<?php

					// WP_Query arguments - displays 3rd post
					$post3args = array ( 
						'offset' => 2,
						'posts_per_page' => 1,
						);

					// The Query
					$post3 = new WP_Query( $post3args );
					?>

					<?php if ( $post3->have_posts() ) : while ( $post3->have_posts() ) : $post3->the_post(); ?>

					<img class="img-responsive" <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(); } ?>
					<div class="editContent">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>
					<div class="editContent excerpt">
						<?php the_excerpt(); ?>
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