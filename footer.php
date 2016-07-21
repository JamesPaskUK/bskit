    <!-- Start Footer 1-1 -->
	<section class="content-block-nopad bg-pomegranate">
		<div class="container footer-1-1">
			<div class="row">
			
				<div class="col-sm-5">
					<img src="images/brand/bskit-logo-white.png" class="brand-img img-responsive">
					<div class="editContent">
						<h3>Over <strong>10,000</strong> downloads last month…</h3>
					</div>
					<div class="editContent">
						<p class="lead">We've hand-crafted <strong>bskit</strong> in great detail to make your life easier… enjoy!</p>
					</div>
				</div>
				
				<div class="col-sm-6 col-sm-offset-1">
					
					<div class="row">

						<div class="col-md-4">

							<h4>Shortcuts</h4>

			                <?php

			                    $shortcutsArgs = array(
			                        'menu'              => 'footer-shortcuts-menu',
			                        'theme_location'    => 'shortcuts',
			                        //'container_class'   => 'col-md-4',
			                        //'container_id'      => 'editContent',
			                        //'menu_class'        => 'col-sm-6 col-sm-offset-1',
			                        );

			                wp_nav_menu( $shortcutsArgs );

			                ?>

		                </div>

		                <div class="col-md-4">

							<h4>Legal Stuff</h4>

			                <?php

			                    $legalsArgs = array(
			                        'menu'              => 'footer-legals-menu',
			                        'theme_location'    => 'legals',
			                        //'container_class'   => 'col-md-4',
			                        //'container_id'      => 'editContent',
			                        //'menu_class'        => 'col-sm-6 col-sm-offset-1',
			                        );

			                wp_nav_menu( $legalsArgs );

			                ?>

		                </div>

						<div class="col-md-4">
							<div class="editContent">
								<h4>Seen Enough?</h4>
							</div>
							<a href="#" class="btn btn-block btn-primary">Buy Now</a>
						</div>
					</div> <!-- .row -->
				</div> <!-- .col-sm6 col-sm-offset-1 -->
			
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
    <!--// END Footer 1-1 --></div><!-- /#page -->

    <?php wp_footer(); ?>

</body>
</html>