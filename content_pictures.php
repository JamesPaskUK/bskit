<?php 

// <!-- Image 1 -->

	$image = get_field( 'image1' );

	if( !empty($image) ): 

		// vars
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];
		$id = 'akabakeneko-image';

		// thumbnail
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];

		if( $caption ): ?>

			<div class="wp-caption">

	<?php endif; ?>

		<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
			<img id="<?php echo $id; ?>" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
		</a>

		<?php if( $caption ): ?>

				<p class="wp-caption-text"><?php echo $caption; ?></p>

			</div>

		<?php endif; ?>

	<?php endif;

// <!-- Image 2 -->

		$image = get_field('image2');

	if( !empty($image) ): 

		// vars
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];
		$id = 'akabakeneko-image';

		// thumbnail
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];

		if( $caption ): ?>

			<div class="wp-caption">

	<?php endif; ?>

		<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
			<img id="<?php echo $id; ?>" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
		</a>

		<?php if( $caption ): ?>

				<p class="wp-caption-text"><?php echo $caption; ?></p>

			</div>

		<?php endif; ?>

	<?php endif;

// <!-- Image 3 -->

		$image = get_field('image3');

	if( !empty($image) ): 

		// vars
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];
		$id = 'akabakeneko-image';

		// thumbnail
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];

		if( $caption ): ?>

			<div class="wp-caption">

	<?php endif; ?>

		<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
			<img id="<?php echo $id; ?>" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
		</a>

		<?php if( $caption ): ?>

				<p class="wp-caption-text"><?php echo $caption; ?></p>

			</div>

		<?php endif; ?>

	<?php endif;

// <!-- Image 4 -->

		$image = get_field('image4');

	if( !empty($image) ): 

		// vars
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];
		$id = 'akabakeneko-image';

		// thumbnail
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];

		if( $caption ): ?>

			<div class="wp-caption">

	<?php endif; ?>

		<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
			<img id="<?php echo $id; ?>" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
		</a>

		<?php if( $caption ): ?>

				<p class="wp-caption-text"><?php echo $caption; ?></p>

			</div>

		<?php endif; ?>

	<?php endif;

// <!-- Image 5 -->

		$image = get_field('image5');

	if( !empty($image) ): 

		// vars
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];
		$id = 'akabakeneko-image';

		// thumbnail
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];

		if( $caption ): ?>

			<div class="wp-caption">

	<?php endif; ?>

		<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
			<img id="<?php echo $id; ?>" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
		</a>

		<?php if( $caption ): ?>

				<p class="wp-caption-text"><?php echo $caption; ?></p>

			</div>

		<?php endif; ?>

	<?php endif;

?>